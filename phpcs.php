<?php

declare(strict_types=1);

return [
    'indent' => '    ',
    'lineEnding' => "\n",
    'rules' => [
        '@DoctrineAnnotation' => true,
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'declare_strict_types' => true,
        'dir_constant' => true,
        'final_class' => true,
        'is_null' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'method_chaining_indentation' => false,
        'no_php4_constructor' => true,
        'ordered_interfaces' => true,
        'php_unit_dedicate_assert_internal_type' => true,
        'php_unit_dedicate_assert' => true,
        'php_unit_expectation' => true,
        'php_unit_mock' => true,
        'php_unit_namespaced' => true,
        'php_unit_no_expectation_annotation' => true,
        'phpdoc_to_comment' => false,
        'single_line_throw' => false,
        'ternary_to_null_coalescing' => true,
        'void_return' => true,
    ],
    'riskyAllowed' => true,
];
