<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $categories = get_the_terms(get_the_ID(), MAGAZINE_CATEGORY);
    $tax;
    $tax_link;
    $credits = get_field('credits');
    foreach($categories as $category ) { 
      $tax = $category->slug;
      $tax_link = get_term_link($category->slug, MAGAZINE_CATEGORY);
    }

    $author_id= $post->post_author;
    $author_name = get_field('name', 'user_'.$author_id);
    $author_image = get_field('profile_image', 'user_'.$author_id) ? get_field('profile_image', 'user_'.$author_id) : resolve_asset_url('/images/no-image-sm.jpg');
    $author_career = get_field('career', 'user_'.$author_id);
    $author_background = get_field('background', 'user_'.$author_id);
    $post_title = get_field('post_title');
  ?>
<main class="main" data-color="<?php echo strtolower(str_replace(' ', '', $tax));?>">
  <div class="regular">
    <div class="regular-mv">
      <div class="regular-mv-content">
        <h1 class="regular-title"><?php the_title();?></h1> 
        <div class="regular-info">
          <span class="regular-category"><a href="<?php echo $tax_link;?>"></a><?php echo $tax;?></span> | <time class="regular-date"><?php the_time('M d,Y');?></time>
        </div>
        <div class="regular-mv-frame">
          <div class="regular-mv-image" style="background-image: url('<?php echo get_eyecatch_data(get_the_id(), 'full', resolve_asset_url('/images/no-image-lg.jpg')); ?>')"></div>
        </div>
        <div class="regular-quote">
          <span class="regular-quote-icon"><?php import_part('quote-svg'); ?></span>
          <p><?php the_field('quote'); ?></p>
        </div>
      </div>
    </div>
    <div class="regular-blog">
      <div class="regular-intro animate-in fade-in">
        <?php the_field('introduction');?>
      </div>
      <?php if( have_rows('regular_content') ):?>
        <?php while ( have_rows('regular_content') ) : the_row();?>

          <?php if( get_row_layout() == 'article' ):
              $article_title = get_sub_field('article_title');
            ?>
            <div class="regular-section">
              <?php if($article_title):?>
                <h2 class="js-section-title animate-in fade-in"><?php echo $article_title; ?></h2>
              <?php endif;?>


              <?php if( have_rows('article_contents') ): ?>
                <?php while( have_rows('article_contents') ): the_row(); 
                  $artcle_par = get_sub_field('article_paragraph');
                  $artcle_img_des = get_sub_field('article_image_description');
                ?>
                  <p class="animate-in fade-in"><?php echo $artcle_par; ?></p>
                <?php endwhile; ?>
              <?php endif; ?>
              
              <?php if( have_rows('contents') ):?> <!-- contents -->
                <?php while ( have_rows('contents') ) : the_row(); ?>
                  <?php if( get_row_layout() == 'text_contents' ):?>
                    <div class="animate-in fade-in"><?php echo get_sub_field('content_field');?></div>
                  <?php elseif( get_row_layout() == 'image_contents' ): ?>
                    <?php
                      $imageCount = 0;
                      $article_images = [];
                      if( have_rows('images_field') ):
                        while( have_rows('images_field') ): the_row();
                          array_push($article_images, get_sub_field('picture'));
                          $imageCount++;
                        endwhile;
                      endif; 
                    ?>
                    <div class="regular-section-images animate-in fade-in <?php echo $imageCount > 1 ? 'is-multiple'  : '' ?>">
                      <?php if( have_rows('images_field') ):?>
                        <?php while( have_rows('images_field') ): the_row();?>
                          <img src="<?php the_sub_field('picture'); ?>" alt="">
                        <?php endwhile;?>
                      <?php endif; ?>
                    </div>
                    <?php
                      $description = get_sub_field('image_field_Description');
                      if($description) :
                    ?>
                      <label class="animate-in fade-in"><?php echo $description;?></label>
                    <?php endif;?>
                  <?php endif; ?>
                <?php endwhile; ?>
              <?php endif; ?> <!-- contents -->

            </div>



          <?php elseif( get_row_layout() == 'table_of_content' ): ?>
            <div class="blog-index regular-blog-index animate-in fade-in">
              <label class="blog-index-heading">index</label>
              <ol>
                <?php if( have_rows('table_of_content_list') ): ?>
                  <?php while( have_rows('table_of_content_list') ): the_row(); ?>
                    <li class="js-blog-index-item" data-posttype="regular"><?php the_sub_field('table_of_content_item'); ?></li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ol>
            </div> <!-- end index -->

          <?php elseif( get_row_layout() == 'recommended' ): ?>
            <div class="blog-banner is-regular animate-in fade-in">
              <span class="blog-banner-triangle blog-banner-triangle-tl"></span>
              <span class="blog-banner-triangle blog-banner-triangle-tr"></span>
              <span class="blog-banner-triangle blog-banner-triangle-br"></span>
              <span class="blog-banner-triangle blog-banner-triangle-bl"></span>
              <h4 class="blog-banner-heading"><span><?php the_sub_field('recommended_title'); ?></span></h4> 
              <div class="blog-banner-columns">
                <div class="blog-banner-cover">
                  <img class="blog-banner-image" src="<?php the_sub_field('recommended_image'); ?>" alt="">
                  <p class="blog-banner-copy"><?php the_sub_field('recommended_image_description'); ?></p>
                </div>
                <div class="blog-banner-column">
                  <?php the_sub_field('recommended_paragraph'); ?>
                </div>
              </div>
            </div> <!-- end banner -->
            <!--?php elseif( get_row_layout() == 'background' ): ?-->
            <!-- <div class="regular-background"> -->
              <!--?php the_sub_field('background_content'); ?-->
            <!-- </div> -->
          <?php endif; ?>
        <?php endwhile; ?>
      <?php else :
        // no layouts found
      endif; ?>
    </div>
  </div>
  
  <?php if($author_background) :?>
    <?php import_part('profile', array(
      'modifier' => 'profile-regular animate-in fade-in',
      'image' => $author_image,
      'name' => $author_name,
      'career' => $author_career,
      'description' => $author_background,
    )); ?>
  <?php endif;?>

  <?php 
    import_part('credits', array(
      'modifier' => 'animate-in fade-in',
      'content' => $credits,
    )); 
  ?>
  <?php import_part('sns', array(
    'modifier' => 'animate-in fade-in'
  )); ?>

  <?php import_part('recommend', array(
    'modifier' => 'animate-in fade-in',
    'term' => $tax
  )); ?> 

  <?php import_part('recent', array(
    'modifier' => 'rich-recent'
  )); ?>
  <?php import_part('tips'); ?>
</main>
<?php endwhile; ?>
<?php
get_footer();