<?php

/**
 * CS Fixer Rules.
 *
 * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * @see https://mlocati.github.io/php-cs-fixer-configurator/
 */
return [
    '@PSR2'                  => true,
    '@PHP71Migration'        => true,
    'binary_operator_spaces' => [
        'operators' => [
            '='  => 'align_single_space',
            '=>' => 'align_single_space',
        ],
    ],
    'blank_line_after_namespace'         => true,
    'blank_line_after_opening_tag'       => true,
    'blank_line_before_return'           => true,
    'cast_spaces'                        => ['space' => 'single'],
    'combine_consecutive_issets'         => true,
    'combine_consecutive_unsets'         => true,
    'compact_nullable_typehint'          => true,
    'concat_space'                       => ['spacing' => 'one'],
    'declare_equal_normalize'            => ['space' => 'single'],
    'dir_constant'                       => true,
    'encoding'                           => true,
    'function_typehint_space'            => true,
    'hash_to_slash_comment'              => true,
    'include'                            => true,
    'line_ending'                        => true,
    'linebreak_after_opening_tag'        => true,
    'lowercase_constants'                => true,
    'lowercase_cast'                     => true,
    'mb_str_functions'                   => true,
    'method_separation'                  => true,
    'magic_constant_casing'              => true,
    'method_argument_space'              => true,
    'modernize_types_casting'            => true,
    'native_function_casing'             => true,
    'no_alias_functions'                 => true,
    'no_blank_lines_after_phpdoc'        => true,
    'no_blank_lines_after_class_opening' => true,
    'no_empty_phpdoc'                    => true,
    'no_empty_statement'                 => true,
    'no_extra_consecutive_blank_lines'   => ['tokens' => [
        'continue',
        'curly_brace_block',
        'extra',
        'return',
    ]],
    'no_closing_tag'                              => true,
    'no_leading_import_slash'                     => true,
    'no_leading_namespace_whitespace'             => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_trailing_comma_in_singleline_array'       => true,
    'no_short_echo_tag'                           => true,
    'no_null_property_initialization'             => true,
    'no_spaces_after_function_name'               => true,
    'no_short_bool_cast'                          => true,
    'no_singleline_whitespace_before_semicolons'  => true,
    'no_spaces_around_offset'                     => true,
    'no_trailing_comma_in_list_call'              => true,
    'no_unused_imports'                           => true, // Эта сюка глючила
    'no_whitespace_in_blank_line'                 => true,
    'no_useless_else'                             => true,
    'no_useless_return'                           => true,
    'no_whitespace_before_comma_in_array'         => true,
    'non_printable_character'                     => true,
    'not_operator_with_successor_space'           => true,
    'normalize_index_brace'                       => true,
    'object_operator_without_whitespace'          => true,
    'ordered_class_elements'                      => true,
    'phpdoc_add_missing_param_annotation'         => ['only_untyped' => false],
    'phpdoc_align'                                => true,
    'phpdoc_annotation_without_dot'               => true,
    'phpdoc_indent'                               => true,
    'phpdoc_inline_tag'                           => true,
    'phpdoc_order'                                => true,
    'phpdoc_separation'                           => true,
    'phpdoc_single_line_var_spacing'              => true,
    'phpdoc_summary'                              => true,
    'phpdoc_types'                                => true,
    'phpdoc_no_access'                            => true,
    'phpdoc_no_package'                           => true,
    'phpdoc_no_useless_inheritdoc'                => true,
    'phpdoc_return_self_reference'                => true,
    'phpdoc_scalar'                               => true,
    'phpdoc_to_comment'                           => false,
    'phpdoc_trim'                                 => true,
    'phpdoc_types_order'                          => ['null_adjustment' => 'always_last'],
    'phpdoc_var_without_name'                     => true,
    'return_type_declaration'                     => true,
    'self_accessor'                               => true,
    'semicolon_after_instruction'                 => true,
    'short_scalar_cast'                           => true,
    'single_line_comment_style'                   => true,
    'single_blank_line_at_eof'                    => true,
    'single_blank_line_before_namespace'          => true,
    'single_line_after_imports'                   => true,
    'single_quote'                                => true,
    'space_after_semicolon'                       => true,
    'standardize_not_equals'                      => true,
    'ternary_operator_spaces'                     => true,
    'trim_array_spaces'                           => true,
    'trailing_comma_in_multiline_array'           => true,
    'unary_operator_spaces'                       => true,
    'void_return'                                 => true,
    'ternary_to_null_coalescing'                  => true,
    'visibility_required'                         => true,
    'whitespace_after_comma_in_array'             => true,
    'ordered_imports'                             => [
        'sortAlgorithm' => 'length',
        'importsOrder'  => [
            'const',
            'class',
            'function',
        ],
    ],
    'array_syntax'                                => ['syntax' => 'short'],
    'is_null'                                     => true,
    'yoda_style'                                  => [
        'equal'            => false,
        'identical'        => false,
        'less_and_greater' => false,
    ],
    'simplified_null_return'                      => true,
];
