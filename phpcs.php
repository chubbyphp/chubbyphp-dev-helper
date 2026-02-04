<?php

declare(strict_types=1);

return [
    'indent' => '    ',
    'lineEnding' => "\n",
    'rules' => [
        '@DoctrineAnnotation' => true,
        '@PHP8x2Migration:risky' => true,
        '@PHP8x3Migration' => true,
        '@PhpCsFixer:risky' => true,
        '@PhpCsFixer' => true,
        '@PHPUnit11x0Migration:risky' => true,
        'date_time_immutable' => true,
        'final_class' => true,
        'final_public_method_for_abstract_class' => true,
        'general_phpdoc_annotation_remove' => true,
        'ordered_interfaces' => true,
        'php_unit_strict' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_to_param_type' => true,
        'phpdoc_to_property_type' => true,
        'phpdoc_to_return_type' => true,
        'regular_callable_call' => true,
        'simplified_if_return' => true,
        'simplified_null_return' => true,
    ],
    'riskyAllowed' => true,
];
