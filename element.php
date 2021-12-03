<?php

return [

    'transforms' => [

        'render' => function ($node) {
            /*echo '<pre>';
            var_dump($node);
            echo '</pre>';*/
            // Don't render element if content fields are empty
            //return $node->props['title'] || $node->props['title1'] || $node->props['content'] || $node->props['image'];

        },

    ]

];
