<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Zesle\\FastRoute',
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
    'line' => 3,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'interface',
    'name' => 'DataGenerator',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addRoute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'httpMethod',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
              'line' => 17,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
              'line' => 17,
              'char' => 64,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'handler',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
              'line' => 17,
              'char' => 73,
            ),
          ),
          'docblock' => '**
     * Adds a route to the data generator. The route data uses the
     * same format that is returned by RouterParser::parser().
     *
     * The handler doesn\'t necessarily need to be a callable, it
     * can be arbitrary data that will be returned when the route
     * matches.
     *
     * @param string $httpMethod
     * @param array $routeData
     * @param mixed $handler
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
            'line' => 17,
            'char' => 82,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
          'line' => 17,
          'last-line' => 22,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getData',
          'docblock' => '**
     * Returns dispatcher data in some unspecified format, which
     * depends on the used method of dispatch.
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
            'line' => 23,
            'char' => 38,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
          'line' => 23,
          'last-line' => 25,
          'char' => 19,
        ),
      ),
      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
      'line' => 25,
      'char' => 1,
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator.zep',
    'line' => 0,
    'char' => 0,
  ),
);