<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfig;

$finder = (new Finder())
    ->exclude('var')
    ->exclude('bin')
    ->exclude('docker')
    ->exclude('DependencyInjection');

$rules = [
    'single_quote' => [
        'strings_containing_single_quote_chars' => false,
    ],
    'semicolon_after_instruction' => true,
    '@PHP83Migration' => true,
    '@PhpCsFixer' => true,
    '@Symfony:risky' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'declare_strict_types' => true,
    'blank_line_before_statement' => [
        'statements' => [
            'break',
            'case',
            'continue',
            'declare',
            'default',
            'do',
            'exit',
            'for',
            'foreach',
            'goto',
            'if',
            'include',
            'include_once',
            'require',
            'require_once',
            'return',
            'switch',
            'throw',
            'try',
            'while',
            'yield',
            'yield_from',
        ],
    ],
    'global_namespace_import' => true,
    'concat_space' => false,
    'method_argument_space' => false,
    'single_line_throw' => false,
    'types_spaces' => ['space_multiple_catch' => 'single'],
    'phpdoc_order' => ['order' => ['param', 'throws', 'return']],
    'phpdoc_separation' => ['groups' => [['ORM\\*'], ['Assert\\*'], ['Serializer\\*'], ['Constraints\\*']]],
];



return (new Config())
    ->setParallelConfig(new ParallelConfig(4))
    ->setLineEnding("\n")
    ->setRules($rules)
    ->setFinder($finder);
