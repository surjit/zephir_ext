<?php

/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Twig-View
 * @copyright Copyright (c) 2011-2015 Josh Lockhart
 * @license   https://github.com/slimphp/Twig-View/blob/master/LICENSE.md (MIT License)
 */

namespace Zesle\Slim\Views;

class MustacheExtension extends \Twig_Extension {

	/**
	 * @var \Slim\Interfaces\RouterInterface
	 */
	private $router;

	/**
	 * @var string|\Slim\Http\Uri
	 */
	private $uri;

	public function __construct( $router, $uri ) {
		$this->router = $router;
		$this->uri = $uri;
	}

	public function getName() {
		return 'slim';
	}

	public function getFunctions() {
		return [
			new \Twig_SimpleFunction( 'path_for', array( $this, 'pathFor' ) ),
			new \Twig_SimpleFunction( 'base_url', array( $this, 'baseUrl' ) ),
		];
	}

	public function pathFor( $name, $data = [ ], $queryParams = [ ], $appName = 'default' ) {
		return $this->router->pathFor( $name, $data, $queryParams );
	}

	public function baseUrl() {
		if( is_string( $this->uri ) ) {
			return $this->uri;
		}
		if( method_exists( $this->uri, 'getBaseUrl' ) ) {
			return $this->uri->getBaseUrl();
		}
	}

	/**
	 * Set the base url
	 *
	 * @param string|Slim\Http\Uri $baseUrl
	 * @return void
	 */
	public function setBaseUrl( $baseUrl ) {
		$this->uri = $baseUrl;
	}

}
