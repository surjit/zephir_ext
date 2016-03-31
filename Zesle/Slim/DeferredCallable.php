<?php

namespace Zesle\Slim;

use Closure;
use Zesle\Interop\Container\ContainerInterface;

class DeferredCallable {

	private $callable;

	/** @var  ContainerInterface */
	private $container;

	/**
	 * DeferredMiddleware constructor.
	 * @param callable|string $callable
	 * @param ContainerInterface $container
	 */
	public function __construct( $callable, ContainerInterface $container = null ) {
		$this->callable = $callable;
		$this->container = $container;
	}

	public function __invoke() {
		$callable = $this->resolveCallable( $this->callable );
		if( $callable instanceof Closure ) {
			$callable = $callable->bindTo( $this->container );
		}

		$args = func_get_args();

		return call_user_func_array( $callable, $args );
	}

	protected function resolveCallable( $callable ) {
		if( !$this->container instanceof ContainerInterface ) {
			return $callable;
		}

		/** @var CallableResolverInterface $resolver */
		$resolver = $this->container->get( 'callableResolver' );

		return $resolver->resolve( $callable );
	}

}
