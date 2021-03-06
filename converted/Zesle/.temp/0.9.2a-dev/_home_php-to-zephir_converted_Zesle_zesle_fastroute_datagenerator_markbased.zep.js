[
    {
        "type": "namespace",
        "name": "Zesle\\FastRoute\\DataGenerator",
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "MarkBased",
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
                                "value": "30",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                "line": 7,
                                "char": 18
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 8,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
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
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
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
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 21
                                },
                                {
                                    "variable": "regexes",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 30
                                },
                                {
                                    "variable": "markName",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 40
                                },
                                {
                                    "variable": "regex",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 47
                                },
                                {
                                    "variable": "route",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 54
                                },
                                {
                                    "variable": "tmpArray2c2f43069618b16172ab1e5762683585",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 12,
                                    "char": 96
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
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
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                        "line": 14,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 14,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
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
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                        "line": 15,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 15,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "markName",
                                    "expr": {
                                        "type": "string",
                                        "value": "a",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                        "line": 16,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 16,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "regexToRoutesMap",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
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
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "regexes",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "regex",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 18,
                                                            "char": 36
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "(*MARK:",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 18,
                                                            "char": 48
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 18,
                                                        "char": 48
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "markName",
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 18,
                                                        "char": 59
                                                    },
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 18,
                                                    "char": 59
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ")",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 18,
                                                    "char": 64
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 18,
                                                "char": 64
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                            "line": 18,
                                            "char": 64
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 19,
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
                                                    "type": "variable",
                                                    "value": "markName",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 19,
                                                    "char": 34
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
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                                "line": 19,
                                                                "char": 46
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "handler",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                                "line": 19,
                                                                "char": 54
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 19,
                                                            "char": 54
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 19,
                                                        "char": 54
                                                    },
                                                    {
                                                        "value": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "route",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                                "line": 19,
                                                                "char": 62
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "variables",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                                "line": 19,
                                                                "char": 72
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 19,
                                                            "char": 72
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 19,
                                                        "char": 72
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 19,
                                                "char": 73
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                            "line": 19,
                                            "char": 73
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 20,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "incr",
                                            "variable": "markName",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                            "line": 20,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 21,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 22,
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
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 22,
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
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 22,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 22,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "regexes",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                            "line": 22,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                        "line": 22,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 22,
                                                "char": 54
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                            "line": 22,
                                            "char": 54
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ")$~",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                            "line": 22,
                                            "char": 61
                                        },
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                        "line": 22,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 22,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 23,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tmpArray2c2f43069618b16172ab1e5762683585",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 23,
                                                    "char": 65
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 23,
                                                    "char": 72
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 23,
                                                "char": 72
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 23,
                                                    "char": 85
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                    "line": 23,
                                                    "char": 95
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                                "line": 23,
                                                "char": 95
                                            }
                                        ],
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                        "line": 23,
                                        "char": 96
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                    "line": 23,
                                    "char": 96
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 24,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "tmpArray2c2f43069618b16172ab1e5762683585",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                                "line": 24,
                                "char": 56
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
                    "line": 10,
                    "last-line": 27,
                    "char": 22
                }
            ],
            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/markbased.zep",
        "line": 3,
        "char": 5
    }
]