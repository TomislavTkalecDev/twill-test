<?php

return [
    'name' => 'My Project Name',  // ← Change this
    // ... rest of config
    // 'block_editor' => [
    //     'block_single_layout' => 'site.layouts.block',
    //     'block_views_path'    => 'site.blocks',
    // ],

    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [ 
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
            ],
        ],
    ],
];