<?php get_header() ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Single Page<span>.</span></h1>

            <p>Example text</p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="single.html" title=""><?php the_title() ?></a></h1>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail() ?>
               </div>

               <div class="post-content">
                  <?php the_post() ?>
                  <?php the_content() ?>

               </div>

            </article> <!-- post end -->

         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

        <?php get_sidebar() ?>

        </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

<?php get_footer() ?>