/*
 * This file is part of Pimple.
 *
 * Copyright (c) 2009 Fabien Potencier
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Zesle\Pimple;

/**
 * Container main class.
 *
 * @author  Fabien Potencier
 */
class Container implements \ArrayAccess
{
    protected values = [];
    protected factories;
    protected protectedd;
    protected frozen = [];
    protected raw = [];
    protected keys = [];
    /**
     * Instantiate the container.
     *
     * Objects and parameters can be passed as argument to the constructor.
     *
     * @param array $values The parameters or objects.
     */
    public function __construct(array values = []) -> void
    {
        var key, value;
    
        let this->factories =  new \SplObjectStorage();
        let this->protectedd =  new \SplObjectStorage();
        for key, value in values {
            this->offsetSet(key, value);
        }
    }
    
    /**
     * Sets a parameter or an object.
     *
     * Objects must be defined as Closures.
     *
     * Allowing any PHP callable leads to difficult to debug problems
     * as function names (strings) are callable (creating a function with
     * the same name as an existing parameter would break your container).
     *
     * @param string $id    The unique identifier for the parameter or object
     * @param mixed  $value The value of the parameter or a closure to define an object
     *
     * @throws \RuntimeException Prevent override of a frozen service
     */
    public function offsetSet(string id, value) -> void
    {
        if isset this->frozen[id] {
            throw new \RuntimeException(sprintf("Cannot override frozen service \"%s\".", id));
        }
        let this->values[id] = value;
        let this->keys[id] = true;
    }
    
    /**
     * Gets a parameter or an object.
     *
     * @param string $id The unique identifier for the parameter or object
     *
     * @return mixed The value of the parameter or an object
     *
     * @throws \InvalidArgumentException if the identifier is not defined
     */
    public function offsetGet(string id)
    {
        var raw, val;
    
        if !(isset this->keys[id]) {
            throw new \InvalidArgumentException(sprintf("Identifier \"%s\" is not defined.", id));
        }
        if isset this->raw[id] || !(is_object(this->values[id])) || isset this->protectedd[this->values[id]] || !(method_exists(this->values[id], "__invoke")) {
            return this->values[id];
        }
        if isset this->factories[this->values[id]] {
            return this->values[id](this);
        }
        let raw = this->values[id];
        let val = {raw}(this);
        let this->values[id] = {raw}(this);
        ;
        let this->raw[id] = raw;
        let this->frozen[id] = true;
        return val;
    }
    
    /**
     * Checks if a parameter or an object is set.
     *
     * @param string $id The unique identifier for the parameter or object
     *
     * @return bool
     */
    public function offsetExists(string id) -> bool
    {
        return isset this->keys[id];
    }
    
    /**
     * Unsets a parameter or an object.
     *
     * @param string $id The unique identifier for the parameter or object
     */
    public function offsetUnset(string id) -> void
    {
        if isset this->keys[id] {
            if is_object(this->values[id]) {
                unset this->factories[this->values[id]];
                unset this->protectedd[this->values[id]];
            
            }
            unset this->values[id];
            unset this->frozen[id];
            unset this->raw[id];
            unset this->keys[id];
        
        }
    }
    
    /**
     * Marks a callable as being a factory service.
     *
     * @param callable $callable A service definition to be used as a factory
     *
     * @return callable The passed callable
     *
     * @throws \InvalidArgumentException Service definition has to be a closure of an invokable object
     */
    public function factory(callablee)
    {
        if !(method_exists(callablee, "__invoke")) {
            throw new \InvalidArgumentException("Service definition is not a Closure or invokable object.");
        }
        this->factories->attach(callablee);
        return callablee;
    }
    
    /**
     * Protects a callable from being interpreted as a service.
     *
     * This is useful when you want to store a callable as a parameter.
     *
     * @param callable $callable A callable to protect from being evaluated
     *
     * @return callable The passed callable
     *
     * @throws \InvalidArgumentException Service definition has to be a closure of an invokable object
     */
    public function protect(callablee)
    {
        if !(method_exists(callablee, "__invoke")) {
            throw new \InvalidArgumentException("Callable is not a Closure or invokable object.");
        }
        this->protectedd->attach(callablee);
        return callablee;
    }
    
    /**
     * Gets a parameter or the closure defining an object.
     *
     * @param string $id The unique identifier for the parameter or object
     *
     * @return mixed The value of the parameter or the closure defining an object
     *
     * @throws \InvalidArgumentException if the identifier is not defined
     */
    public function raw(string id)
    {
        if !(isset this->keys[id]) {
            throw new \InvalidArgumentException(sprintf("Identifier \"%s\" is not defined.", id));
        }
        if isset this->raw[id] {
            return this->raw[id];
        }
        return this->values[id];
    }
    
    /**
     * Extends an object definition.
     *
     * Useful when you want to extend an existing object definition,
     * without necessarily loading that object.
     *
     * @param string   $id       The unique identifier for the object
     * @param callable $callable A service definition to extend the original
     *
     * @return callable The wrapped callable
     *
     * @throws \InvalidArgumentException if the identifier is not defined or not a service definition
     */
    public function extend(string id, callablee)
    {
        var factory, extended;
    
        if !(isset this->keys[id]) {
            throw new \InvalidArgumentException(sprintf("Identifier \"%s\" is not defined.", id));
        }
        if !(is_object(this->values[id])) || !(method_exists(this->values[id], "__invoke")) {
            throw new \InvalidArgumentException(sprintf("Identifier \"%s\" does not contain an object definition.", id));
        }
        if !(is_object(callablee)) || !(method_exists(callablee, "__invoke")) {
            throw new \InvalidArgumentException("Extension service definition is not a Closure or invokable object.");
        }
        let factory = this->values[id];
        let extended =  new ContainerextendClosureOne(callablee, factory);
        if isset this->factories[factory] {
            this->factories->detach(factory);
            this->factories->attach(extended);
        }
        let this[id] = extended;
        return this[id];
    }
    
    /**
     * Returns all defined value names.
     *
     * @return array An array of value names
     */
    public function keys() -> array
    {
        return array_keys(this->values);
    }
    
    /**
     * Registers a service provider.
     *
     * @param ServiceProviderInterface $provider A ServiceProviderInterface instance
     * @param array                    $values   An array of values that customizes the provider
     *
     * @return static
     */
    public function register(<ServiceProviderInterface> provider, array values = []) -> <static>
    {
        var key, value;
    
        provider->register(this);
        for key, value in values {
            let this[key] = value;
        }
        return this;
    }

}