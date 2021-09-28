<?php

declare(strict_types=1);

return [
    'indent' => '    ',
    'lineEnding' => "\n",
    'rules' => [
        '@DoctrineAnnotation' => true,
        '@PHP74Migration' => true,
        '@PHP74Migration:risky' => true,
        '@PHPUnit84Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'mb_str_functions' => true,
        'array_syntax' => ['syntax' => 'short'],
        'final_class' => true,
        'final_public_method_for_abstract_class' => true,
        'ordered_interfaces' => true,
        'self_static_accessor' => true,
        'date_time_immutable' => true,
        'simplified_if_return' => true,
        'yoda_style' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'phpdoc_to_param_type' => true,
        'phpdoc_to_property_type' => true,
        'phpdoc_to_return_type' => true,
        'regular_callable_call' => true,
        'static_lambda' => true,
        'declare_parentheses' => true,
        'php_unit_strict' => false,
        'general_phpdoc_annotation_remove' => true,
        'simplified_null_return' => true,
    ],
    'riskyAllowed' => true,
];
