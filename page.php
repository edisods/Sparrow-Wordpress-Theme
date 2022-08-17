<?php get_header() ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Blog<span>.</span></h1>

            <p>Example text </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <?php if (have_posts()) { while (have_posts()){ the_post(); ?>
                <article class="post">

                    <div class="entry-header cf">

                        <h3><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h3>

                        <p class="post-meta">
                            <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS Y'); ?></time>  
                            
                            <span class="categories">
                                <?php the_tags( '  ', ' / ') ?>
                            </span>
                        </p>

                    </div>

                    <div class="post-thumb">
                        <a href="<?php the_permalink() ?>" title=""><?php the_post_thumbnail('post_thumb') ?></a>
                    </div>

                    <div class="post-content">

                        <p><?php the_excerpt() ?></p>

                    </div>

                </article> <!-- post end -->
              <?php } ?>
               <?php the_posts_pagination(); ?>
            <?php } ?>

            <!-- Pagination -->
           

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

        <?php get_sidebar() ?>

        </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->



<?php get_footer() ?>