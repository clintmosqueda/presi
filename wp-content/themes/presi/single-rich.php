<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

global $wp_query; 


get_header(); ?>


  <?php while (have_posts()) : the_post(); ?>
  <?php
    $author_id= $post->post_author;
    $author_name = get_field('name', 'user_'.$author_id);
    $author_image = get_field('profile_image', 'user_'.$author_id) ? get_field('profile_image', 'user_'.$author_id) : resolve_asset_url('/images/no-image-sm.jpg');
    $author_career = get_field('career', 'user_'.$author_id);
    $author_background = get_field('background', 'user_'.$author_id);
    $series_name = get_field('series_name');
    $series_number = get_field('series_number');
    $post_title = get_field('post_title');
    $featuredImageMobile = get_field('featured_image_mobile') ? get_field('featured_image_mobile') : resolve_asset_url('/images/no-image-sm.jpg');

    $tax;
    $tax_link;
    $categories = get_the_terms(get_the_ID(), MAGAZINE_CATEGORY);
    $credits = get_field('credits');
    $featuredImage = get_field('featured_image');
    foreach($categories as $category ) { 
      $tax = $category->slug;
      $tax_link = get_term_link($category->slug, MAGAZINE_CATEGORY);
    }
    ?>
  <main class="main" data-color="<?php echo strtolower(str_replace(' ', '', $tax));?>">
  <div class="rich">
    <div class="rich-mv">
      <div class="wrapper">
        <div class="rich-mv-inner">
          <div class="rich-frame">
            <div class="rich-image show-pc" style="background-image: url('<?php echo get_eyecatch_data(get_the_id(), 'full', resolve_asset_url('/images/no-image-lg.jpg')); ?>')"></div>
            <?php if($featuredImageMobile) :?>
              <div class="rich-image show-sp" style="background-image: url('<?php echo $featuredImageMobile ?>')"></div>
            <?php endif;?>

            <div class="rich-category" data-category="<?php echo $tax;?>">
              <p class="rich-category-inner">
                <span><a href="<?php echo $tax_link;?>"></a><?php echo $tax;?></span> | <time><?php the_time('M d,Y');?></time>
              </p>
            </div>
          </div>
          <div class="rich-title">
            <p class="rich-description">
              <span class="rich-series-wrap">
                <span class="rich-series"><?php echo $series_name; ?></span>
              </span>
              <?php import_part('number', array(
                'modifier' => 'rich-number',
                'number' => $series_number
              )); ?>
            </p>
            <h1 class="rich-heading"><span class="rich-heading-wrap"><span class="rich-heading-inner"><?php echo $post_title?></span></span></h1>
          </div>
        </div>
      </div>
    </div> <!-- end rich-mv -->


    <div class="wrapper">
      <article class="rich-intro">
        <p class="rich-intro-text animate-in fade-in"><?php the_field('introduction'); ?></p>
        <div class="rich-author animate-in fade-in">
          <div class="rich-author-info">
            <!-- <label class="rich-author-label">今月の <span>Off</span>な人</label> -->
            <label class="rich-author-label"><img src="<?php echo resolve_asset_url('/images/off.svg')?>" alt=""></label>
            <p class="rich-author-name"><?php echo $author_name;?></p>
            <span class="rich-author-career"><?php echo $author_career;?></span>
            <div class="rich-author-link js-to-author">profile <span class="rich-author-link-icon"></span></div>
          </div>
          <div class="rich-author-avatar" style="background-image: url('<?php echo $author_image; ?>')"></div>
        </div>
      </article> <!-- end intro -->

      <div class="rich-blog">

      <?php
      if( have_rows('rich_content') ):
        while ( have_rows('rich_content') ) : the_row(); ?>
          <?php 
          if( get_row_layout() == 'article' ): 
            $imageCount = 0;
            $article_images = [];
            $article_title = get_sub_field('article_title');
            $artcle_par = get_sub_field('article_paragraph');

              if( have_rows('article_images') ):
                while( have_rows('article_images') ): the_row();
                  array_push($article_images, get_sub_field('article_image'));
                  $imageCount++;
                endwhile;
              endif;
            ?>
            <section class="rich-section">
              <div class="rich-section-images animate-in fade-in <?php echo $imageCount > 1 ? 'is-multiple'  : '' ?>">
                <?php foreach ($article_images as $image) { ?>
                  <img src="<?php echo $image; ?>" alt="">
                <?php } ?>
              </div>
              <?php if($article_title): ?>
                <h2 class="rich-section-heading js-section-title animate-in"><?php echo $article_title; ?></h2>
              <?php endif; ?>
              <div class="animate-in fade-in">
                <?php echo $artcle_par; ?>
              </div>
            </section> <!-- end section -->
              
          <?php elseif( get_row_layout() == 'table_of_content' ): ?>
            <div class="blog-index rich-blog-index animate-in fade-in">
              <label class="blog-index-heading"><img src="<?php echo resolve_asset_url('/images/index.svg')?>" alt=""></label>
              <ol>
                <?php if( have_rows('table_of_content_list') ): ?>
                  <?php while( have_rows('table_of_content_list') ): the_row(); ?>
                    <li class="js-blog-index-item" data-posttype="rich"><?php the_sub_field('table_of_content_item'); ?></li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ol>
            </div> <!-- end index -->
            
          <?php elseif( get_row_layout() == 'recommended' ): ?>
            <div class="blog-banner animate-in fade-in">
              <span class="blog-banner-triangle blog-banner-triangle-tl"></span>
              <span class="blog-banner-triangle blog-banner-triangle-tr"></span>
              <span class="blog-banner-triangle blog-banner-triangle-br"></span>
              <span class="blog-banner-triangle blog-banner-triangle-bl"></span>
              <h4 class="blog-banner-heading"><span><?php the_sub_field('recommended_title'); ?></span></h4> 
              <div class="blog-banner-columns">
                <div class="blog-banner-cover">
                  <div class="blog-banner-image" style="background-image: url('<?php the_sub_field('recommended_image'); ?>')"></div>
                  <p class="blog-banner-copy"><?php the_sub_field('recommended_image_label'); ?></p>
                </div>
                <div class="blog-banner-column">
                  <?php the_sub_field('recommended_paragraph'); ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endwhile;
      else :
          // no layouts found
      endif; ?>
        <div class="rich-caption animate-in fade-in">
          <span class="rich-caption-image"><img src="<?php echo $featuredImage;?>" alt=""></span>
        </div>
      </div> <!-- end blog -->
    </div> <!-- end wrapper -->
  </div> <!-- end rich -->
    <?php if($author_background) {
        import_part('profile', array(
          'modifier' => 'profile-rich js-author animate-in fade-in',
          'image' => $author_image,
          'name' => $author_name,
          'career' => $author_career,
          'description' => $author_background,
        )); 
      } ?>
    <?php 
    if($credits) {
      import_part('credits', array(
        'modifier' => 'animate-in fade-in',
        'content' => $credits,
      )); 
    } ?>
    <?php import_part('sns', array(
      'modifier' => 'animate-in fade-in'
    )); ?>
  <?php endwhile; ?>

  <?php
    $args = array(
      'post_type'      => RICH_POST_TYPE,
      'meta_key'       => 'series_name',
      'meta_value'     => $series_name,
      'posts_per_page' => 2,
      'orderby'        => 'post_date',
      'order'          => 'ASC',
      'post_status'    => 'publish',
      'post__not_in'   => array( get_the_ID() ),
    );
    $related_args = new WP_Query( $args );
    if($related_args->have_posts()) {
  ?>

  <div class="rich-feature animate-in fade-in">
    <div class="wrapper">
      <div class="rich-feature-block">
        <h2 class="rich-feature-heading">
          <span>Features</span>
          <?php echo $series_name;?>
        </h2>
        <div class="rich-feature-content">
          <?php
            while( $related_args->have_posts()) : $related_args->the_post(); 
            $series_number =  get_field('series_number');
            $terms = get_the_terms( get_the_ID(), MAGAZINE_CATEGORY); 
            $term_slug;
            foreach($terms as $term ) { 
              $term_slug = $term->name;
            }
          ?>
          <?php import_part('card', array(
            'modifier' => 'card-horizontal',
            'link' => get_permalink(),
            'image' => get_eyecatch_data(get_the_ID(), 'card-image', ''),
            'title' => get_the_title(),
            'category' => strtolower($term_slug),
            'time' => get_the_time('M d,Y'),
            'number' => $series_number,
          )); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div> <!-- end rich feature -->
  <?php }?>

  <?php import_part('other-features'); ?>

  <?php import_part('recommend', array(
    'modifier' => 'animate-in fade-in',
    'term' => $tax
  )); ?> 
  
  <?php import_part('recent', array(
    'modifier' => 'rich-recent'
  )); ?>
  <?php import_part('tips'); ?>
</main>

<?php
get_footer();
