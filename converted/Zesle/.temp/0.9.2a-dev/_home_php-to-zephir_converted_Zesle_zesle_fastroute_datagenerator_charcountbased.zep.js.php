<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Zesle\\FastRoute\\DataGenerator',
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'CharCountBased',
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
                'value' => '30',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                'line' => 7,
                'char' => 18,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 8,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
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
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
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
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'regexes',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'suffixLen',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 41,
                ),
                3 => 
                array (
                  'variable' => 'suffix',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 49,
                ),
                4 => 
                array (
                  'variable' => 'count',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 56,
                ),
                5 => 
                array (
                  'variable' => 'regex',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 63,
                ),
                6 => 
                array (
                  'variable' => 'route',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 70,
                ),
                7 => 
                array (
                  'variable' => 'tmpArray23c19983325889a32e4a177f9df76c02',
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 12,
                  'char' => 112,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
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
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 14,
                    'char' => 27,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 14,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
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
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 15,
                    'char' => 26,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 15,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
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
                  'variable' => 'suffixLen',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 16,
                    'char' => 26,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 16,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 17,
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
                  'variable' => 'suffix',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 17,
                    'char' => 24,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 17,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 18,
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
                  'variable' => 'count',
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
                          'type' => 'variable',
                          'value' => 'regexToRoutesMap',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 18,
                          'char' => 44,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 18,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 18,
                    'char' => 45,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 18,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 19,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'regexToRoutesMap',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                'line' => 19,
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
                      'assign-type' => 'incr',
                      'variable' => 'suffixLen',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 20,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 21,
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
                      'operator' => 'concat-assign',
                      'variable' => 'suffix',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '	',
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 21,
                        'char' => 29,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 21,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 22,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '(?:',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                    'line' => 22,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'regex',
                                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                    'line' => 22,
                                    'char' => 44,
                                  ),
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                  'line' => 22,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => '/(\\\\t{',
                                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                  'line' => 22,
                                  'char' => 55,
                                ),
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 22,
                                'char' => 55,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'suffixLen',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 22,
                                'char' => 67,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 22,
                              'char' => 67,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '})\\\\t{',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 22,
                              'char' => 78,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 22,
                            'char' => 78,
                          ),
                          'right' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'sub',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'count',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 22,
                                'char' => 87,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'suffixLen',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 22,
                                'char' => 98,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 22,
                              'char' => 98,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 22,
                            'char' => 100,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 22,
                          'char' => 100,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '})',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 22,
                          'char' => 106,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 22,
                        'char' => 106,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 22,
                      'char' => 106,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 23,
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
                          'type' => 'variable',
                          'value' => 'suffix',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 23,
                          'char' => 32,
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
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 23,
                                'char' => 44,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'handler',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 23,
                                'char' => 52,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 23,
                              'char' => 52,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 23,
                            'char' => 52,
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
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 23,
                                'char' => 60,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'variables',
                                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                                'line' => 23,
                                'char' => 70,
                              ),
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 23,
                              'char' => 70,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 23,
                            'char' => 70,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 23,
                        'char' => 71,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 23,
                      'char' => 71,
                    ),
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 24,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 25,
              'char' => 11,
            ),
            7 => 
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
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 25,
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
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 25,
                              'char' => 43,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 25,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'regexes',
                              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                              'line' => 25,
                              'char' => 52,
                            ),
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 25,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 25,
                        'char' => 54,
                      ),
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 25,
                      'char' => 54,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => ')$~',
                      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                      'line' => 25,
                      'char' => 61,
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 25,
                    'char' => 61,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 25,
                  'char' => 61,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 26,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tmpArray23c19983325889a32e4a177f9df76c02',
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
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 65,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 72,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 26,
                        'char' => 72,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'suffix',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 83,
                        ),
                        'value' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => '/',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 26,
                            'char' => 89,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'suffix',
                            'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                            'line' => 26,
                            'char' => 97,
                          ),
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 97,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 26,
                        'char' => 97,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'routeMap',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 110,
                        ),
                        'value' => 
                        array (
                          'type' => 'variable',
                          'value' => 'routeMap',
                          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                          'line' => 26,
                          'char' => 120,
                        ),
                        'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                        'line' => 26,
                        'char' => 120,
                      ),
                    ),
                    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                    'line' => 26,
                    'char' => 121,
                  ),
                  'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                  'line' => 26,
                  'char' => 121,
                ),
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 27,
              'char' => 14,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'tmpArray23c19983325889a32e4a177f9df76c02',
                'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
                'line' => 27,
                'char' => 56,
              ),
              'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
          'line' => 10,
          'last-line' => 30,
          'char' => 22,
        ),
      ),
      'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/php-to-zephir/converted/Zesle/zesle/fastroute/datagenerator/charcountbased.zep',
    'line' => 3,
    'char' => 5,
  ),
);