<?php

declare(strict_types=1);

return [
    'views' => true,
    'extensions' => [],
    'renderer' => [
        'block_separator' => "\n",
        'inner_separator' => "\n",
        'soft_break' => "\n",
    ],
    'enable_em' => true,
    'enable_strong' => true,
    'use_asterisk' => true,
    'use_underscore' => true,
    'html_input' => 'strip',
    'allow_unsafe_links' => true,
    'max_nesting_level' => INF,
];
