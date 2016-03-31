<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Zesle\\FastRoute\\DataGenerator',
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'GroupCountBased',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'RegexBasedAbstract',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getApproxChunkSize',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '10',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                'line' => 7,
                'char' => 18,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 8,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
          'line' => 5,
          'last-line' => 10,
          'char' => 22,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
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
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 10,
              'char' => 53,
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
                  'variable' => 'routeMap',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'regexes',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'numGroups',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 41,
                ),
                3 => 
                array (
                  'variable' => 'regex',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 48,
                ),
                4 => 
                array (
                  'variable' => 'route',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 55,
                ),
                5 => 
                array (
                  'variable' => 'numVariables',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 69,
                ),
                6 => 
                array (
                  'variable' => 'tmpArrayfd7d2a31a57244cb262a40809e06b542',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 12,
                  'char' => 111,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 14,
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
                  'variable' => 'routeMap',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                    'line' => 14,
                    'char' => 27,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 14,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 15,
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
                  'variable' => 'regexes',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                    'line' => 15,
                    'char' => 26,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 15,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 16,
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
                  'variable' => 'numGroups',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                    'line' => 16,
                    'char' => 26,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 16,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 17,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'regexToRoutesMap',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                'line' => 17,
                'char' => 46,
              ),
              'key' => 'regex',
              'value' => 'route',
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
                      'variable' => 'numVariables',
                      'expr' => 
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
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'route',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 18,
                                'char' => 45,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'variables',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 18,
                                'char' => 55,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 18,
                              'char' => 55,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 18,
                            'char' => 55,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 18,
                        'char' => 56,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 18,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 19,
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
                      'variable' => 'numGroups',
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
                              'type' => 'variable',
                              'value' => 'numGroups',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 19,
                              'char' => 43,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 19,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'numVariables',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 19,
                              'char' => 57,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 19,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 19,
                        'char' => 58,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 19,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 20,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'regexes',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 20,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'str_repeat',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => '()',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 20,
                                'char' => 53,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 20,
                              'char' => 53,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'sub',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'numGroups',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                  'line' => 20,
                                  'char' => 65,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'numVariables',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                  'line' => 20,
                                  'char' => 79,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 20,
                                'char' => 79,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 20,
                              'char' => 79,
                            ),
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 20,
                          'char' => 80,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 20,
                        'char' => 80,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 20,
                      'char' => 80,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 21,
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
                      'variable' => 'routeMap',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'add',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'numGroups',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 21,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 21,
                            'char' => 39,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 21,
                          'char' => 39,
                        ),
                      ),
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
                                'value' => 'route',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 21,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'handler',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 21,
                                'char' => 59,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 21,
                              'char' => 59,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 21,
                            'char' => 59,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'route',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 21,
                                'char' => 67,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'variables',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                                'line' => 21,
                                'char' => 77,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 21,
                              'char' => 77,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 21,
                            'char' => 77,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 21,
                        'char' => 78,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 21,
                      'char' => 78,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 22,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'incr',
                      'variable' => 'numGroups',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 22,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 23,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 24,
              'char' => 11,
            ),
            5 => 
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
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '~^(?|',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 24,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'implode',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '|',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 24,
                              'char' => 43,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 24,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'regexes',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                              'line' => 24,
                              'char' => 52,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                            'line' => 24,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 24,
                        'char' => 54,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 24,
                      'char' => 54,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ')$~',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                      'line' => 24,
                      'char' => 61,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                    'line' => 24,
                    'char' => 61,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 24,
                  'char' => 61,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 25,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tmpArrayfd7d2a31a57244cb262a40809e06b542',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 25,
                          'char' => 65,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 25,
                          'char' => 72,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 25,
                        'char' => 72,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'routeMap',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 25,
                          'char' => 85,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeMap',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                          'line' => 25,
                          'char' => 95,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                        'line' => 25,
                        'char' => 95,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                    'line' => 25,
                    'char' => 96,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                  'line' => 25,
                  'char' => 96,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 26,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'tmpArrayfd7d2a31a57244cb262a40809e06b542',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
                'line' => 26,
                'char' => 56,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
              'line' => 27,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
          'line' => 10,
          'last-line' => 29,
          'char' => 22,
        ),
      ),
      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/groupcountbased.zep',
    'line' => 3,
    'char' => 5,
  ),
);