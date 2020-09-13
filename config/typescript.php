<?php

use EntityTranspiler\Generators\Utils\ClassResolver\PathResolver;
use EntityTranspiler\Utils\ClassRef\Transformer;
use EntityTranspiler\Utils\NameFormat\Writer;

return [
    // Location of your php entity classes
    "sourceExplorer"=>[
        "class" => \EntityTranspiler\SourceExplorers\ClassFinder::class,
        "config" => ["path"=>"src"]
    ],
    // Use docblock annotations, to define entities and properties
    "loader"=>[
        "class" => \EntityTranspiler\Loaders\Annotation::class,
        "config" => []
    ],
    // Export options
    "generator"=>[
        // Generate typescript classes
        "class" => \EntityTranspiler\Generators\Typescript::class,
        "config" => [
            // Define associations between source namespace+class names, and the target namespace+class names
            // Multiple resolve rules can be defined, with different sources
            "classResolver" => [
                [
                    // Filter source namespace/class
                    // "source" => "App\\*"
                    "source" => "*",

                    // Output options
                    "pathResolver" => [
                        "type" => PathResolver::TYPE_DIRECTORY,
                        "path" => "output",
                        "dirNameFormat" => Writer::KEBAB_CASE,
                        "fileNameFormat" => Writer::KEBAB_CASE
                    ],

                    // Class/enum name format
                    "classNameResolver" => ["format"=>Writer::PASCAL_CASE],
                    "enumResolver" => ["propertyNameFormat"=>Writer::PASCAL_CASE],

                    // Transform namespace+class names before export
                    "transformer" => [
                        "type" => Transformer::TYPE_COMPOSITION,
                        "transformers" => [
                            [
                                // Skip top level ( App ) namespace in path
                                "type" => Transformer::TYPE_SLICE_NAMESPACE,
                                "offset" => 1
                            ],
                            /*
                            [
                                // Removes all the namespaces, and leave the class names only
                                "type" => Transformer::TYPE_FLATTEN
                            ]
                            */
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
