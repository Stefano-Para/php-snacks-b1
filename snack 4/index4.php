<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.  -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navigare Array</title>
    </head>
    <body>
        
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

        foreach ($posts as $date => $datePosts) { ?>

            <section class="date">
            <h2><?php echo $date; 
            /*
            <?= $variabile; ?>
            
            --- è identico a ---
            
            <?php echo $variabile; ?>
            
            */
            ?></h2>
                <ul>
                    <?php foreach($datePosts as $post) { ?>
                    <li>
                        <h3><?php echo $post["title"]; ?></h3>
                        <small><?php echo $post["author"]; ?></small>
                        <p><?php echo $post["text"]; ?></p>
                    </li>
                    <?php } ?>
                    
                </ul>
            </section>
            <?php } ?>

    </body>
</html>