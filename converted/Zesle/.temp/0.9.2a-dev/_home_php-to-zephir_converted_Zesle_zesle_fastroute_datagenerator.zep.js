[
    {
        "type": "namespace",
        "name": "Zesle\\FastRoute",
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
        "line": 3,
        "char": 9
    },
    {
        "type": "interface",
        "name": "DataGenerator",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "addRoute",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "httpMethod",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                            "line": 17,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "routeData",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                            "line": 17,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "handler",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                            "line": 17,
                            "char": 73
                        }
                    ],
                    "docblock": "**\n     * Adds a route to the data generator. The route data uses the\n     * same format that is returned by RouterParser::parser().\n     *\n     * The handler doesn't necessarily need to be a callable, it\n     * can be arbitrary data that will be returned when the route\n     * matches.\n     *\n     * @param string $httpMethod\n     * @param array $routeData\n     * @param mixed $handler\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                        "line": 17,
                        "char": 82
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                    "line": 17,
                    "last-line": 22,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getData",
                    "docblock": "**\n     * Returns dispatcher data in some unspecified format, which\n     * depends on the used method of dispatch.\n     *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                        "line": 23,
                        "char": 38
                    },
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
                    "line": 23,
                    "last-line": 25,
                    "char": 19
                }
            ],
            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
            "line": 25,
            "char": 1
        },
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator.zep",
        "line": 0,
        "char": 0
    }
]