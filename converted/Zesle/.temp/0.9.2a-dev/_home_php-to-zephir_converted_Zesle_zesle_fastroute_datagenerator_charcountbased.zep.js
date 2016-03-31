[
    {
        "type": "namespace",
        "name": "Zesle\\FastRoute\\DataGenerator",
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "CharCountBased",
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
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                "line": 7,
                                "char": 18
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 8,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
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
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
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
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 21
                                },
                                {
                                    "variable": "regexes",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 30
                                },
                                {
                                    "variable": "suffixLen",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 41
                                },
                                {
                                    "variable": "suffix",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 49
                                },
                                {
                                    "variable": "count",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 56
                                },
                                {
                                    "variable": "regex",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 63
                                },
                                {
                                    "variable": "route",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 70
                                },
                                {
                                    "variable": "tmpArray23c19983325889a32e4a177f9df76c02",
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 12,
                                    "char": 112
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
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
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 14,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 14,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
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
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 15,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 15,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "suffixLen",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 16,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 16,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "suffix",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 17,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 17,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 18,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "count",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "regexToRoutesMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 18,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 18,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 18,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 18,
                                    "char": 45
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 19,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "regexToRoutesMap",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                "line": 19,
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
                                            "assign-type": "incr",
                                            "variable": "suffixLen",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 20,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 21,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "concat-assign",
                                            "variable": "suffix",
                                            "expr": {
                                                "type": "string",
                                                "value": "\t",
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 21,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 21,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 22,
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "string",
                                                                        "value": "(?:",
                                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                        "line": 22,
                                                                        "char": 36
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "regex",
                                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                        "line": 22,
                                                                        "char": 44
                                                                    },
                                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                    "line": 22,
                                                                    "char": 44
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": "\/(\\\\t{",
                                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                    "line": 22,
                                                                    "char": 55
                                                                },
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 22,
                                                                "char": 55
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "suffixLen",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 22,
                                                                "char": 67
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 22,
                                                            "char": 67
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "})\\\\t{",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 22,
                                                            "char": 78
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 22,
                                                        "char": 78
                                                    },
                                                    "right": {
                                                        "type": "list",
                                                        "left": {
                                                            "type": "sub",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "count",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 22,
                                                                "char": 87
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "suffixLen",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 22,
                                                                "char": 98
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 22,
                                                            "char": 98
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 22,
                                                        "char": 100
                                                    },
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 22,
                                                    "char": 100
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "})",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 22,
                                                    "char": 106
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 22,
                                                "char": 106
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 22,
                                            "char": 106
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 23,
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
                                                    "value": "suffix",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 23,
                                                    "char": 32
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
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 23,
                                                                "char": 44
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "handler",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 23,
                                                                "char": 52
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 23,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 23,
                                                        "char": 52
                                                    },
                                                    {
                                                        "value": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "route",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 23,
                                                                "char": 60
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "variables",
                                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                                "line": 23,
                                                                "char": 70
                                                            },
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 23,
                                                            "char": 70
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 23,
                                                        "char": 70
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 23,
                                                "char": 71
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 23,
                                            "char": 71
                                        }
                                    ],
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 24,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 25,
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
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 25,
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
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 25,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 25,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "regexes",
                                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                            "line": 25,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 25,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 25,
                                                "char": 54
                                            },
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 25,
                                            "char": 54
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ")$~",
                                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                            "line": 25,
                                            "char": 61
                                        },
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 25,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 25,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 26,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "tmpArray23c19983325889a32e4a177f9df76c02",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 65
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "regex",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 72
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 26,
                                                "char": 72
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "suffix",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 83
                                                },
                                                "value": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "\/",
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 26,
                                                        "char": 89
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "suffix",
                                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                        "line": 26,
                                                        "char": 97
                                                    },
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 97
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 26,
                                                "char": 97
                                            },
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 110
                                                },
                                                "value": {
                                                    "type": "variable",
                                                    "value": "routeMap",
                                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                    "line": 26,
                                                    "char": 120
                                                },
                                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                                "line": 26,
                                                "char": 120
                                            }
                                        ],
                                        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                        "line": 26,
                                        "char": 121
                                    },
                                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                    "line": 26,
                                    "char": 121
                                }
                            ],
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 27,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "tmpArray23c19983325889a32e4a177f9df76c02",
                                "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                                "line": 27,
                                "char": 56
                            },
                            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                            "line": 28,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
                    "line": 10,
                    "last-line": 30,
                    "char": 22
                }
            ],
            "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/home\/php-to-zephir\/converted\/Zesle\/zesle\/fastroute\/datagenerator\/charcountbased.zep",
        "line": 3,
        "char": 5
    }
]