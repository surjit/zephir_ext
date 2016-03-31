<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Zesle\\FastRoute\\DataGenerator',
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
    'line' => 3,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Zesle\\FastRoute\\DataGenerator',
        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
        'line' => 3,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
    'line' => 4,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Zesle\\FastRoute\\BadRouteException',
        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
        'line' => 4,
        'char' => 38,
      ),
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
    'line' => 5,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Zesle\\FastRoute\\Route',
        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
        'line' => 5,
        'char' => 26,
      ),
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
    'line' => 6,
    'char' => 8,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'RegexBasedAbstract',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'DataGenerator',
        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
        'line' => 7,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'staticRoutes',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 8,
            'char' => 32,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 9,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'methodToRegexToRoutesMap',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 9,
            'char' => 44,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 10,
          'char' => 13,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'abstract',
          ),
          'type' => 'method',
          'name' => 'getApproxChunkSize',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 10,
            'char' => 61,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 10,
          'last-line' => 12,
          'char' => 31,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'abstract',
          ),
          'type' => 'method',
          'name' => 'processChunk',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'regexToRoutesMap',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 12,
              'char' => 62,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 12,
            'char' => 71,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 12,
          'last-line' => 14,
          'char' => 31,
        ),
        2 => 
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 14,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 14,
              'char' => 51,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'handler',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 14,
              'char' => 60,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 16,
                  'char' => 17,
                ),
                'name' => 'isStaticRoute',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'routeData',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 16,
                      'char' => 41,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 16,
                    'char' => 41,
                  ),
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 16,
                'char' => 43,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 17,
                      'char' => 18,
                    ),
                    'name' => 'addStaticRoute',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'httpMethod',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 17,
                          'char' => 44,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 17,
                        'char' => 44,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeData',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 17,
                          'char' => 55,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 17,
                        'char' => 55,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'handler',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 17,
                          'char' => 64,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 17,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 17,
                    'char' => 65,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 18,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 19,
                      'char' => 18,
                    ),
                    'name' => 'addVariableRoute',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'httpMethod',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 19,
                          'char' => 46,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 19,
                        'char' => 46,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeData',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 19,
                          'char' => 57,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 19,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'handler',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 19,
                          'char' => 66,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 19,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 19,
                    'char' => 67,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 20,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 21,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 15,
            'char' => 5,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 14,
          'last-line' => 23,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getData',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 25,
                  'char' => 53,
                ),
                1 => 
                array (
                  'variable' => 'tmpArray2d71b5e677c5099aa8c338214455c341',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 25,
                  'char' => 95,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 27,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 27,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'methodToRegexToRoutesMap',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 27,
                      'char' => 48,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 27,
                    'char' => 48,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 27,
                  'char' => 50,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 27,
                'char' => 50,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 28,
                                'char' => 66,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'staticRoutes',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 28,
                                'char' => 79,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 28,
                              'char' => 79,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 28,
                            'char' => 79,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'empty-array',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 28,
                              'char' => 83,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 28,
                            'char' => 83,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 28,
                        'char' => 84,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 28,
                      'char' => 84,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 29,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tmpArrayc2c6fa324eb40f17ce6bdf94e319d8f8',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 29,
                    'char' => 60,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 30,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 31,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tmpArray2d71b5e677c5099aa8c338214455c341',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 31,
                            'char' => 62,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'staticRoutes',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 31,
                            'char' => 75,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 31,
                          'char' => 75,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 31,
                        'char' => 75,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 31,
                            'char' => 82,
                          ),
                          'name' => 'generateVariableRouteData',
                          'call-type' => 1,
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 31,
                          'char' => 110,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 31,
                        'char' => 110,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 31,
                    'char' => 111,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 31,
                  'char' => 111,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 32,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'tmpArray2d71b5e677c5099aa8c338214455c341',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 32,
                'char' => 56,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 33,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 23,
          'last-line' => 35,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'generateVariableRouteData',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'data',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'method',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 25,
                ),
                2 => 
                array (
                  'variable' => 'regexToRoutesMap',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 43,
                ),
                3 => 
                array (
                  'variable' => 'chunkSize',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 54,
                ),
                4 => 
                array (
                  'variable' => 'chunks',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 62,
                ),
                5 => 
                array (
                  'variable' => 'tmpArray48d9a6cfef2bbc72d13746a6767d8972',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 37,
                  'char' => 104,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 39,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 39,
                    'char' => 23,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 39,
                  'char' => 23,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 40,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 40,
                  'char' => 46,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'methodToRegexToRoutesMap',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 40,
                  'char' => 72,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 40,
                'char' => 72,
              ),
              'key' => 'method',
              'value' => 'regexToRoutesMap',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'chunkSize',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 41,
                          'char' => 35,
                        ),
                        'name' => 'computeChunkSize',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'count',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'regexToRoutesMap',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 41,
                                    'char' => 75,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 41,
                                  'char' => 75,
                                ),
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 41,
                              'char' => 76,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 41,
                            'char' => 76,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 41,
                        'char' => 77,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 41,
                      'char' => 77,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 42,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'chunks',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_chunk',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'regexToRoutesMap',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 42,
                              'char' => 55,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 42,
                            'char' => 55,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'chunkSize',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 42,
                              'char' => 66,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 42,
                            'char' => 66,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 42,
                              'char' => 72,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 42,
                            'char' => 72,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 42,
                        'char' => 73,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 42,
                      'char' => 73,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 43,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'tmpArray48d9a6cfef2bbc72d13746a6767d8972',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 43,
                              'char' => 65,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 43,
                            'char' => 65,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'processChunk',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 43,
                              'char' => 81,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 43,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 43,
                        'char' => 82,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 43,
                      'char' => 82,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 44,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'data',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'method',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 44,
                          'char' => 28,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_map',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tmpArray48d9a6cfef2bbc72d13746a6767d8972',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 44,
                              'char' => 83,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 44,
                            'char' => 83,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'chunks',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 44,
                              'char' => 91,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 44,
                            'char' => 91,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 44,
                        'char' => 92,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 44,
                      'char' => 92,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 45,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 46,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'data',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 46,
                'char' => 20,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 47,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 35,
          'last-line' => 49,
          'char' => 22,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'computeChunkSize',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'count',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 49,
              'char' => 46,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'numParts',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 51,
                  'char' => 21,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 53,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'numParts',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'max',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 53,
                          'char' => 30,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 53,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'round',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'div',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'count',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 53,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 53,
                                    'char' => 51,
                                  ),
                                  'name' => 'getApproxChunkSize',
                                  'call-type' => 1,
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 53,
                                  'char' => 72,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 53,
                                'char' => 72,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 53,
                              'char' => 72,
                            ),
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 53,
                          'char' => 73,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 53,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 53,
                    'char' => 74,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 53,
                  'char' => 74,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 54,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ceil',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'div',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'count',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 54,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'numParts',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 54,
                        'char' => 37,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 54,
                      'char' => 37,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 54,
                    'char' => 37,
                  ),
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 54,
                'char' => 38,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 55,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 49,
          'last-line' => 57,
          'char' => 22,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'isStaticRoute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 57,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'count',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeData',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 59,
                          'char' => 31,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 59,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 59,
                    'char' => 34,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 59,
                    'char' => 39,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 59,
                  'char' => 39,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_string',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeData',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 59,
                          'char' => 60,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 59,
                          'char' => 62,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 59,
                        'char' => 63,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 59,
                      'char' => 63,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 59,
                  'char' => 64,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 59,
                'char' => 64,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 60,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 57,
          'last-line' => 62,
          'char' => 22,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'addStaticRoute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'httpMethod',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 62,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 62,
              'char' => 60,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'handler',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 62,
              'char' => 69,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'routeStr',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 64,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'route',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 64,
                  'char' => 28,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 66,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'routeStr',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'routeData',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 66,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 66,
                      'char' => 35,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 66,
                    'char' => 36,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 66,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 67,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 67,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'staticRoutes',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 67,
                        'char' => 36,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 67,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpMethod',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 67,
                      'char' => 47,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 67,
                    'char' => 48,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'routeStr',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 67,
                    'char' => 57,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 67,
                  'char' => 59,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 67,
                'char' => 59,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'BadRouteException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'sprintf',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'Cannot register two routes matching \\"%s\\" for method \\"%s\\"',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 68,
                                'char' => 111,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 68,
                              'char' => 111,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'routeStr',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 68,
                                'char' => 121,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 68,
                              'char' => 121,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'httpMethod',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 68,
                                'char' => 133,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 68,
                              'char' => 133,
                            ),
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 68,
                          'char' => 134,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 68,
                        'char' => 134,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 68,
                    'char' => 135,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 69,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 70,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 70,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'methodToRegexToRoutesMap',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 70,
                      'char' => 48,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 70,
                    'char' => 48,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'httpMethod',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 70,
                    'char' => 59,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 70,
                  'char' => 61,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 70,
                'char' => 61,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 71,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'methodToRegexToRoutesMap',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 71,
                        'char' => 56,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 71,
                      'char' => 56,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpMethod',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 71,
                      'char' => 67,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 71,
                    'char' => 69,
                  ),
                  'value' => 'route',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'route',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 72,
                          'char' => 26,
                        ),
                        'name' => 'matches',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'routeStr',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 72,
                              'char' => 43,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 72,
                            'char' => 43,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 72,
                        'char' => 45,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'throw',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'BadRouteException',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'sprintf',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'Static route \\"%s\\" is shadowed by previously defined variable route \\"%s\\" for method \\"%s\\"',
                                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                        'line' => 73,
                                        'char' => 152,
                                      ),
                                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                      'line' => 73,
                                      'char' => 152,
                                    ),
                                    1 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'routeStr',
                                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                        'line' => 73,
                                        'char' => 162,
                                      ),
                                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                      'line' => 73,
                                      'char' => 162,
                                    ),
                                    2 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'property-access',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'route',
                                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                          'line' => 73,
                                          'char' => 170,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'regex',
                                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                          'line' => 73,
                                          'char' => 176,
                                        ),
                                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                        'line' => 73,
                                        'char' => 176,
                                      ),
                                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                      'line' => 73,
                                      'char' => 176,
                                    ),
                                    3 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'httpMethod',
                                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                        'line' => 73,
                                        'char' => 188,
                                      ),
                                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                      'line' => 73,
                                      'char' => 188,
                                    ),
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 73,
                                  'char' => 189,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 73,
                                'char' => 189,
                              ),
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 73,
                            'char' => 190,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 74,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 75,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 76,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 77,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'staticRoutes',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpMethod',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 77,
                      'char' => 42,
                    ),
                    1 => 
                    array (
                      'type' => 'variable',
                      'value' => 'routeStr',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 77,
                      'char' => 52,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'handler',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 77,
                    'char' => 63,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 77,
                  'char' => 63,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 78,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 63,
            'char' => 5,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 62,
          'last-line' => 80,
          'char' => 22,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'addVariableRoute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'httpMethod',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 80,
              'char' => 51,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 80,
              'char' => 62,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'handler',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 80,
              'char' => 71,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'regex',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 82,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'variables',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 82,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'tmpListRegexVariables',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 82,
                  'char' => 52,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 84,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tmpListRegexVariables',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 84,
                      'char' => 42,
                    ),
                    'name' => 'buildRegexForRoute',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeData',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 84,
                          'char' => 71,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 84,
                        'char' => 71,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 84,
                    'char' => 72,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 84,
                  'char' => 72,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 85,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'regex',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tmpListRegexVariables',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 85,
                      'char' => 42,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 85,
                      'char' => 44,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 85,
                    'char' => 45,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 85,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 86,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'variables',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tmpListRegexVariables',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 86,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 86,
                      'char' => 48,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 86,
                    'char' => 49,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 86,
                  'char' => 49,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 87,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 87,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'methodToRegexToRoutesMap',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 87,
                        'char' => 48,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 87,
                      'char' => 48,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpMethod',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 87,
                      'char' => 59,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 87,
                    'char' => 60,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'regex',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 87,
                    'char' => 66,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 87,
                  'char' => 68,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 87,
                'char' => 68,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'BadRouteException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'sprintf',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'Cannot register two routes matching \\"%s\\" for method \\"%s\\"',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 88,
                                'char' => 111,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 88,
                              'char' => 111,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'regex',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 88,
                                'char' => 118,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 88,
                              'char' => 118,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'httpMethod',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 88,
                                'char' => 130,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 88,
                              'char' => 130,
                            ),
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 88,
                          'char' => 131,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 88,
                        'char' => 131,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 88,
                    'char' => 132,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 89,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 90,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'methodToRegexToRoutesMap',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'httpMethod',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 90,
                      'char' => 54,
                    ),
                    1 => 
                    array (
                      'type' => 'variable',
                      'value' => 'regex',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 90,
                      'char' => 61,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Route',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'httpMethod',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 90,
                          'char' => 85,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 90,
                        'char' => 85,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'handler',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 90,
                          'char' => 94,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 90,
                        'char' => 94,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 90,
                          'char' => 101,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 90,
                        'char' => 101,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'variables',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 90,
                          'char' => 112,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 90,
                        'char' => 112,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 90,
                    'char' => 113,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 90,
                  'char' => 113,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 91,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
            'line' => 81,
            'char' => 5,
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 80,
          'last-line' => 93,
          'char' => 22,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'buildRegexForRoute',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'routeData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 93,
              'char' => 52,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'regex',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'variables',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'part',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 35,
                ),
                3 => 
                array (
                  'variable' => 'varName',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 44,
                ),
                4 => 
                array (
                  'variable' => 'regexPart',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 55,
                ),
                5 => 
                array (
                  'variable' => 'tmpListVarNameRegexPart',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 80,
                ),
                6 => 
                array (
                  'variable' => 'tmpArray9b357d66d0464c555bcfed4ee1975ea5',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 95,
                  'char' => 122,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 97,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'regex',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 97,
                    'char' => 23,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 97,
                  'char' => 23,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 98,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'variables',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 98,
                    'char' => 28,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 98,
                  'char' => 28,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 99,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'routeData',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 99,
                'char' => 31,
              ),
              'value' => 'part',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'is_string',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'part',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 100,
                          'char' => 30,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 100,
                        'char' => 30,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 100,
                    'char' => 32,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'concat-assign',
                          'variable' => 'regex',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'preg_quote',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'part',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 101,
                                  'char' => 44,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 101,
                                'char' => 44,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '~',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 101,
                                  'char' => 49,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                'line' => 101,
                                'char' => 49,
                              ),
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 101,
                            'char' => 50,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 101,
                          'char' => 50,
                        ),
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 102,
                      'char' => 24,
                    ),
                    1 => 
                    array (
                      'type' => 'continue',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 103,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 104,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'tmpListVarNameRegexPart',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'part',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 104,
                        'char' => 47,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 104,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 105,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'varName',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'tmpListVarNameRegexPart',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 105,
                          'char' => 50,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 105,
                          'char' => 52,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 105,
                        'char' => 53,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 105,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 106,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'regexPart',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'tmpListVarNameRegexPart',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 106,
                          'char' => 52,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 106,
                          'char' => 54,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 106,
                        'char' => 55,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 106,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 107,
                  'char' => 14,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'variables',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 107,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'varName',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 107,
                        'char' => 39,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 107,
                      'char' => 41,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 107,
                    'char' => 41,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'BadRouteException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'sprintf',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'Cannot use the same placeholder \\"%s\\" twice',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 108,
                                    'char' => 99,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 108,
                                  'char' => 99,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'varName',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 108,
                                    'char' => 108,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 108,
                                  'char' => 108,
                                ),
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 108,
                              'char' => 109,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 108,
                            'char' => 109,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 108,
                        'char' => 110,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 109,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 110,
                  'char' => 14,
                ),
                5 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 110,
                      'char' => 21,
                    ),
                    'name' => 'regexHasCapturingGroups',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regexPart',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 110,
                          'char' => 55,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 110,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 110,
                    'char' => 57,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'BadRouteException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'sprintf',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'Regex \\"%s\\" for parameter \\"%s\\" contains a capturing group',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 111,
                                    'char' => 115,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 111,
                                  'char' => 115,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'regexPart',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 111,
                                    'char' => 126,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 111,
                                  'char' => 126,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'varName',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                    'line' => 111,
                                    'char' => 135,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                                  'line' => 111,
                                  'char' => 135,
                                ),
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                              'line' => 111,
                              'char' => 136,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 111,
                            'char' => 136,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 111,
                        'char' => 137,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 112,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 113,
                  'char' => 15,
                ),
                6 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'variables',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'varName',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 113,
                          'char' => 34,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'varName',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 113,
                        'char' => 45,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 113,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 114,
                  'char' => 15,
                ),
                7 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'concat-assign',
                      'variable' => 'regex',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => '(',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 114,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'regexPart',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                            'line' => 114,
                            'char' => 41,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 114,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ')',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 114,
                          'char' => 46,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 114,
                        'char' => 46,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 114,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 115,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 116,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tmpArray9b357d66d0464c555bcfed4ee1975ea5',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 116,
                          'char' => 62,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 116,
                        'char' => 62,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'variables',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                          'line' => 116,
                          'char' => 73,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 116,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 116,
                    'char' => 74,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 116,
                  'char' => 74,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 117,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'tmpArray9b357d66d0464c555bcfed4ee1975ea5',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 117,
                'char' => 56,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 118,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 93,
          'last-line' => 120,
          'char' => 22,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'regexHasCapturingGroups',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'regex',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 120,
              'char' => 53,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'strpos',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'regex',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 122,
                        'char' => 24,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 122,
                      'char' => 24,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => '(',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                        'line' => 122,
                        'char' => 29,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 122,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 122,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 122,
                  'char' => 41,
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 122,
                'char' => 41,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 124,
                    'char' => 25,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                  'line' => 125,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 127,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'preg_match',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '~
                (?:
                    \\\\(\\\\?\\\\(
                  | \\\\[ [^\\\\]\\\\\\\\]* (?: \\\\\\\\ . [^\\\\]\\\\\\\\]* )* \\\\]
                  | \\\\\\\\ .
                ) (*SKIP)(*FAIL) |
                \\\\(
                (?!
                    \\\\? (?! <(?![!=]) | P< | \' )
                  | \\\\*
                )
            ~x',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 127,
                      'char' => 354,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 127,
                    'char' => 354,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'regex',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                      'line' => 127,
                      'char' => 361,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                    'line' => 127,
                    'char' => 361,
                  ),
                ),
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
                'line' => 127,
                'char' => 362,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
              'line' => 128,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
          'line' => 120,
          'last-line' => 130,
          'char' => 22,
        ),
      ),
      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
      'line' => 6,
      'char' => 14,
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/regexbasedabstract.zep',
    'line' => 6,
    'char' => 14,
  ),
);