<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.  -->

<?php
$posts = [

    '13/12/2009' => [
        [
            'title' => 'Post 1',
            'author' => 'Aileen: ',
            'text' => 'Ciaooooo come stai?'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Stefano: ',
            'text' => 'Bene e tu?'
        ],
    ],
    '25/12/2015' => [
        [
            'title' => 'Post 3',
            'author' => 'Babbo Natale: ',
            'text' => 'Finalmente ho comprato le renne nuove'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Aldo: ',
            'text' => 'Due foot'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Giovanni: ',
            'text' => 'E quanto sono due foot?'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Giacomo: ',
            'text' => 'mah.. circa 7 yards'
        ]
    ],
];

foreach ($posts as $post) {
    // echo $posts;
    foreach ($post as $posts) {
        // echo $posts;
        foreach ($posts as $post) {
            echo "<h2>" . $post . "</h2>";
        }
    }
};







?>