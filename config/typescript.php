<?php

use EntityTranspiler\Generators\Utils\ClassResolver\PathResolver;
use EntityTranspiler\Utils\ClassRef\Transformer;
use EntityTranspiler\Utils\NameFormat\Writer;

return [
    "sourceExplorer"=>[
        "class" => \EntityTranspiler\SourceExplorers\ClassFinder::class,
        "config" => ["path"=>"src"]
    ],
    "loader"=>[
        "class" => \EntityTranspiler\Loaders\Annotation::class,
        "config" => []
    ],
    "generator"=>[
        "class" => \EntityTranspiler\Generators\Typescript::class,
        "config" => [
            "classResolver" => [
                [
                    "source" => "*",
                    "pathResolver" => [
                        "type" => PathResolver::TYPE_DIRECTORY,
                        "path" => "output",
                        "dirNameFormat" => Writer::KEBAB_CASE,
                        "fileNameFormat" => Writer::KEBAB_CASE
                    ],
                    "classNameResolver" => ["format"=>Writer::PASCAL_CASE],
                    "enumResolver" => ["propertyNameFormat"=>Writer::PASCAL_CASE],
                    "transformer" => [
                        "type" => Transformer::TYPE_COMPOSITION,
                        "transformers" => [
                            [
                                // Skip top level ( App ) namespace in path
                                "type" => Transformer::TYPE_SLICE_NAMESPACE,
                                "offset" => 1
                            ],
                            [
                                // Keep the currently top level namespaces: Shop/Ticketing (offset:1)
                                // Concatenate the subnamespaces with the classnames ( Shop\Cart\Entry -> Shop\CartEntry )
                                "type" => Transformer::TYPE_PREPEND_NAMESPACE,
                                "offset" => 1
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
