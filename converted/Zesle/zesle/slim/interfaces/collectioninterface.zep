/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Interfaces;

/**
 * Collection Interface
 *
 * @package Slim
 * @since   3.0.0
 */
interface CollectionInterface extends ArrayAccess, Countable, IteratorAggregate
{
    public function set(key, value) -> void;
    
    public function get(key, default = null) -> void;
    
    public function replace(array items) -> void;
    
    public function all() -> void;
    
    public function has(key) -> void;
    
    public function remove(key) -> void;
    
    public function clear() -> void;

}