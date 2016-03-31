/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Interfaces\Http;

/**
 * Cookies Interface
 *
 * @package Slim
 * @since   3.0.0
 */
interface CookiesInterface
{
    public function get(name, default = null) -> void;
    
    public function set(name, value) -> void;
    
    public function toHeaders() -> void;
    
    public static function parseHeader(header) -> void;

}