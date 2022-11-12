<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use Zvive\Fixer\SharedConfig;
use Zvive\Fixer\Rulesets\ZviveRuleset;
use Zvive\Fixer\Finders\LaravelProjectFinder;

$finder = LaravelProjectFinder::create(__DIR__)->notName('*.stub');
$rules  = [
    // '@PSR12'                 => true,
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'case',
            'constant',
            'property',
            'construct',
            'destruct',
            'magic',
            'phpunit',
            'method_abstract',
            'method',
        ],
        'sort_algorithm' => 'none',
    ],
    'general_phpdoc_annotation_remove' => [],
    'phpdoc_to_comment'                => ['ignored_tags' => ['internal', 'var', 'mixin', 'todo']],
    'comment_to_phpdoc'                => ['ignored_tags' => ['todo']],
    'no_superfluous_phpdoc_tags'       => false,
    'ordered_imports'                  => [
        'sort_algorithm' => 'length',
    ],
    'use_arrow_functions'        => false,
    'native_function_invocation' => [
        'exclude' => ['beforeAll', 'afterAll', 'beforeEach', 'afterEach', 'it', 'test', 'uses', 'usesBeforeAll', 'usesBeforeEach', 'dd', 'dump', 'before', 'after', 'config', 'env', 'factory', 'artisan', 'cache', 'app_path', 'base_path', 'database_path'],
        'include' => ['@compiler_optimized'],
        'scope'   => 'namespaced',
        'strict'  => true,
    ],
    // 'no_extra_blank_lines' => [
    //     'tokens' => [
    //         'attribute',
    //         'curly_brace_block',
    //         'parenthesis_brace_block',
    //         'default',
    //         'square_brace_block',
    //         'extra',
    //         'use',
    //         'use_trait',
    //     ],
    // ],

    'binary_operator_spaces' => [
        'default'   => 'align_single_space_minimal',
        'operators' => [
            '=>' => 'align_single_space_minimal',
            // '->' => 'align_single_space_minimal',
            '=' => 'align_single_space_minimal',
            // '?'  => 'align_single_space_minimal',
            '??' => 'align_single_space_minimal',
            // '?:' => 'align_single_space_minimal',
        ],
    ],

    'method_argument_space' => [
        'on_multiline' => 'ensure_fully_multiline',
    ],
];

return SharedConfig::create($finder, new ZviveRuleset($rules));
