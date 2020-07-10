<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_stylesheet_uri()?>">
</head>
<body>
    <h1>WP1 Theme</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- THE LOOP -->
                <?php if(have_posts() ) : ?>
                    
                    <?php while(have_posts()) : ?>

                        <?php the_post(); // puts $post into scope ?>

                        <h1><a href="<?php the_permalink() ?>"><?= the_title() ?> </a></h1>

                        <?php if(!is_page()) : ?>

                            <p class="small">Posted on: <?php the_date() . 'by ' . the_author() ?></p>

                        <?php endif; ?>
                        
                        

                        <?php the_content() ?>
                       
                    <?php endwhile; ?>

                    <?php else: ?>

                        <h2>Sorry we do not have any posts</h2>

                <?php endif; ?>

            </div>
        </div>
    </div>
</body>
</html>