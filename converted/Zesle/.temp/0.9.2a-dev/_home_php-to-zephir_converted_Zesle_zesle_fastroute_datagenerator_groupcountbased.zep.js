[
    {
        "type": "namespace",
        "name": "Zesle\\FastRoute\\DataGenerator",
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "GroupCountBased",
        "abstract": 0,
        "final": 0,
        "extends": "RegexBasedAbstract",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "getApproxChunkSize",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "10",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                "line": 7,
                                "char": 18
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 8,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                    "line": 5,
                    "last-line": 10,
                    "char": 22
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "processChunk",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "regexToRoutesMap",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 10,
                            "char": 53
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "routeMap",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 21
                                },
                                {
                                    "variable": "regexes",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 30
                                },
                                {
                                    "variable": "numGroups",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 41
                                },
                                {
                                    "variable": "regex",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 48
                                },
                                {
                                    "variable": "route",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 55
                                },
                                {
                                    "variable": "numVariables",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 69
                                },
                                {
                                    "variable": "tmpArrayfd7d2a31a57244cb262a40809e06b542",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 12,
                                    "char": 111
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 14,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "routeMap",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                        "line": 14,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 14,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 15,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "regexes",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                        "line": 15,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 15,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "numGroups",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                        "line": 16,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 16,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "regexToRoutesMap",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                "line": 17,
                                "char": 46
                            },
                            "key": "regex",
                            "value": "route",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "numVariables",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "count",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "route",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 18,
                                                                "char": 45
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "variables",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 18,
                                                                "char": 55
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 18,
                                                            "char": 55
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 18,
                                                        "char": 55
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 18,
                                                "char": 56
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 18,
                                            "char": 56
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 19,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "numGroups",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "max",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "numGroups",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 19,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 19,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "numVariables",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 19,
                                                            "char": 57
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 19,
                                                        "char": 57
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 19,
                                                "char": 58
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 19,
                                            "char": 58
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 20,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "regexes",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 20,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "str_repeat",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "()",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 20,
                                                                "char": 53
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 20,
                                                            "char": 53
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "sub",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "numGroups",
                                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                    "line": 20,
                                                                    "char": 65
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "numVariables",
                                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                    "line": 20,
                                                                    "char": 79
                                                                },
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 20,
                                                                "char": 79
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 20,
                                                            "char": 79
                                                        }
                                                    ],
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 20,
                                                    "char": 80
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 20,
                                                "char": 80
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 20,
                                            "char": 80
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 21,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "routeMap",
                                            "index-expr": [
                                                {
                                                    "type": "add",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "numGroups",
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 21,
                                                        "char": 36
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "1",
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 21,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 21,
                                                    "char": 39
                                                }
                                            ],
                                            "expr": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "value": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "route",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 21,
                                                                "char": 51
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "handler",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 21,
                                                                "char": 59
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 21,
                                                            "char": 59
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 21,
                                                        "char": 59
                                                    },
                                                    {
                                                        "value": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "route",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 21,
                                                                "char": 67
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "variables",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                                "line": 21,
                                                                "char": 77
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 21,
                                                            "char": 77
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 21,
                                                        "char": 77
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 21,
                                                "char": 78
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 21,
                                            "char": 78
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 22,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "incr",
                                            "variable": "numGroups",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 22,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 23,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 24,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "regex",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "~^(?|",
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 24,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "implode",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "|",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 24,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 24,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "regexes",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                            "line": 24,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                        "line": 24,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 24,
                                                "char": 54
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 24,
                                            "char": 54
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ")$~",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                            "line": 24,
                                            "char": 61
                                        },
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                        "line": 24,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 24,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 25,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tmpArrayfd7d2a31a57244cb262a40809e06b542",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 25,
                                                    "char": 65
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 25,
                                                    "char": 72
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 25,
                                                "char": 72
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 25,
                                                    "char": 85
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                    "line": 25,
                                                    "char": 95
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                                "line": 25,
                                                "char": 95
                                            }
                                        ],
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                        "line": 25,
                                        "char": 96
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                    "line": 25,
                                    "char": 96
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 26,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "tmpArrayfd7d2a31a57244cb262a40809e06b542",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                                "line": 26,
                                "char": 56
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                            "line": 27,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
                    "line": 10,
                    "last-line": 29,
                    "char": 22
                }
            ],
            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/groupcountbased.zep",
        "line": 3,
        "char": 5
    }
]