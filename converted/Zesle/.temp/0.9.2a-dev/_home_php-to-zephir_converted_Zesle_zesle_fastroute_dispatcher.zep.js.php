<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Zesle\\FastRoute',
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
    'line' => 3,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'interface',
    'name' => 'Dispatcher',
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
          'name' => 'dispatch',
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
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
              'line' => 22,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
              'line' => 22,
              'char' => 59,
            ),
          ),
          'docblock' => '**
     * Dispatches against the provided HTTP method verb and URI.
     *
     * Returns array with one of the following formats:
     *
     *     [self::NOT_FOUND]
     *     [self::METHOD_NOT_ALLOWED, [\'GET\', \'OTHER_ALLOWED_METHODS\']]
     *     [self::FOUND, $handler, [\'varName\' => \'value\', ...]]
     *
     * @param string $httpMethod
     * @param string $uri
     *
     * @return array
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
                'line' => 22,
                'char' => 69,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
            'line' => 22,
            'char' => 69,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
          'line' => 22,
          'last-line' => 24,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'NOT_FOUND',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
            'line' => 5,
            'char' => 24,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
          'line' => 6,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'FOUND',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
            'line' => 6,
            'char' => 20,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
          'line' => 7,
          'char' => 9,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'METHOD_NOT_ALLOWED',
          'default' => 
          array (
            'type' => 'int',
            'value' => '2',
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
            'line' => 7,
            'char' => 33,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
          'line' => 21,
          'char' => 6,
        ),
      ),
      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
      'line' => 24,
      'char' => 1,
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/dispatcher.zep',
    'line' => 0,
    'char' => 0,
  ),
);