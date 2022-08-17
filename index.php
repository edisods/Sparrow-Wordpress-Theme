<?php get_header() ?>


   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Sparrow<span>.</span></h1>
							   <p>WordPress theme</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-01.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>This is test template<span>.</span></h1>
							   <p>Responsive slider</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-02.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Clean & Modern.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Responsive.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns s-first">
              <h2>HTML5 + CSS3.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Free of Charge.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   
   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">
        <?php
        $args = array(
            'numberposts' => 3,
            'post_type' => 'post',
            'order' => 'ASC',
            'suppress_filters' => true,
        );
        $posts =get_posts($args);
        foreach($posts as $post) { setup_postdata($post);
            ?>
                <article class="row entry">

                    <div class="entry-header">

                    <div class="permalink">
                        <a href="<?php the_permalink() ?>"><i class="fa fa-link"></i></a>
                    </div>

                    <div class="ten columns entry-title pull-right">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    </div>

                    <div class="two columns post-meta end">
                        <p>
                        <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('F, jS, Y') ?></time>
                        <span class="dauthor">By <?php the_author() ?></span>
                        </p>
                    </div>
                    </div>
                    <div class="ten columns offset-2 post-content">
                        <?php the_excerpt() ?>
                    </div>

                </article> <!-- Entry End -->
            <?php 
        }

        wp_reset_postdata();
        ?>
         <!-- Entry -->
         

      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

<?php get_footer() ?>