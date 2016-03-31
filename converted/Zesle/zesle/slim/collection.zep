/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim;

use ArrayIterator;
use Zesle\Slim\Interfaces\CollectionInterface;
/**
 * Collection
 *
 * This class provides a common interface used by many other
 * classes in a Slim application that manage "collections"
 * of data that must be inspected and/or manipulated
 */
class Collection implements CollectionInterface
{
    /**
     * The source data
     *
     * @var array
     */
    protected data = [];
    /**
     * Create new collection
     *
     * @param array $items Pre-populate collection with this key-value array
     */
    public function __construct(array items = []) -> void
    {
        var key, value;
    
        for key, value in items {
            this->set(key, value);
        }
    }
    
    /********************************************************************************
     * Collection interface
     *******************************************************************************/
    /**
     * Set collection item
     *
     * @param string $key   The data key
     * @param mixed  $value The data value
     */
    public function set(key, value) -> void
    {
        let this->data[key] = value;
    }
    
    /**
     * Get collection item for key
     *
     * @param string $key     The data key
     * @param mixed  $default The default value to return if data key does not exist
     *
     * @return mixed The key's value, or the default value
     */
    public function get(string key, default = null)
    {
        return  this->has(key) ? this->data[key]  : default;
    }
    
    /**
     * Add item to collection
     *
     * @param array $items Key-value array of data to append to this collection
     */
    public function replace(array items) -> void
    {
        var key, value;
    
        for key, value in items {
            this->set(key, value);
        }
    }
    
    /**
     * Get all items in collection
     *
     * @return array The collection's source data
     */
    public function all() -> array
    {
        return this->data;
    }
    
    /**
     * Get collection keys
     *
     * @return array The collection's source data keys
     */
    public function keys() -> array
    {
        return array_keys(this->data);
    }
    
    /**
     * Does this collection have a given key?
     *
     * @param string $key The data key
     *
     * @return bool
     */
    public function has(string key) -> bool
    {
        return array_key_exists(key, this->data);
    }
    
    /**
     * Remove item from collection
     *
     * @param string $key The data key
     */
    public function remove(string key) -> void
    {
        unset this->data[key];
    
    }
    
    /**
     * Remove all items from collection
     */
    public function clear() -> void
    {
        let this->data =  [];
    }
    
    /********************************************************************************
     * ArrayAccess interface
     *******************************************************************************/
    /**
     * Does this collection have a given key?
     *
     * @param  string $key The data key
     *
     * @return bool
     */
    public function offsetExists(key)
    {
        return this->has(key);
    }
    
    /**
     * Get collection item for key
     *
     * @param string $key The data key
     *
     * @return mixed The key's value, or the default value
     */
    public function offsetGet(string key)
    {
        return this->get(key);
    }
    
    /**
     * Set collection item
     *
     * @param string $key   The data key
     * @param mixed  $value The data value
     */
    public function offsetSet(string key, value) -> void
    {
        this->set(key, value);
    }
    
    /**
     * Remove item from collection
     *
     * @param string $key The data key
     */
    public function offsetUnset(string key) -> void
    {
        this->remove(key);
    }
    
    /**
     * Get number of items in collection
     *
     * @return int
     */
    public function count() -> int
    {
        return count(this->data);
    }
    
    /********************************************************************************
     * IteratorAggregate interface
     *******************************************************************************/
    /**
     * Get collection iterator
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator(this->data);
    }

}