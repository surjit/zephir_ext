[
    {
        "type": "namespace",
        "name": "Zesle\\FastRoute",
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
        "line": 3,
        "char": 9
    },
    {
        "type": "interface",
        "name": "Dispatcher",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "dispatch",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "httpMethod",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                            "line": 22,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "uri",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                            "line": 22,
                            "char": 59
                        }
                    ],
                    "docblock": "**\n     * Dispatches against the provided HTTP method verb and URI.\n     *\n     * Returns array with one of the following formats:\n     *\n     *     [self::NOT_FOUND]\n     *     [self::METHOD_NOT_ALLOWED, ['GET', 'OTHER_ALLOWED_METHODS']]\n     *     [self::FOUND, $handler, ['varName' => 'value', ...]]\n     *\n     * @param string $httpMethod\n     * @param string $uri\n     *\n     * @return array\n     *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                                "line": 22,
                                "char": 69
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                        "line": 22,
                        "char": 69
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                    "line": 22,
                    "last-line": 24,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "NOT_FOUND",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                        "line": 5,
                        "char": 24
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                    "line": 6,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "FOUND",
                    "default": {
                        "type": "int",
                        "value": "1",
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                        "line": 6,
                        "char": 20
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                    "line": 7,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "METHOD_NOT_ALLOWED",
                    "default": {
                        "type": "int",
                        "value": "2",
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                        "line": 7,
                        "char": 33
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
                    "line": 21,
                    "char": 6
                }
            ],
            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
            "line": 24,
            "char": 1
        },
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/dispatcher.zep",
        "line": 0,
        "char": 0
    }
]