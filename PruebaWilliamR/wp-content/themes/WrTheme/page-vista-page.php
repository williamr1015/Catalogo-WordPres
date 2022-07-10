<?php get_header(); ?>
<main class="container">
    <?php if (have_posts()){
        while (have_posts()){
            the_post();
            ?>
                    <h1 class="my-5"><?php the_title(); ?></h1>
                    <div class="row">
                        <div class="col-6">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="col-6">
                            <?php the_content(); ?>
                        </div>
                    </div>
                                 
            <?php
        }
    }?>

    <div class="lista_productos">
    <div class="row">
        <h2 class="text-center">
            Productos
        </h2>
            <?php
            $productos = new WP_Query(array(
                'post_type' => 'productos',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'title',
            ));
        
            if($productos -> have_posts()){
                while($productos -> have_posts()){
                    $productos -> the_post();
                    ?>
                    <div class="col-4">
                        <figure>
                            <?php the_post_thumbnail('large'); ?>
                        </figure>
                        <h4 class="my-3">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                        </h4>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <h6><?php the_meta(); ?></h6>
                    </div>
               
                    <?php
                }
            }
            ?>
   </div>
   </div>
   </main>

<?php get_footer(); ?>