<?php
get_header();
$archiveCat = get_queried_object()->name;
$archiveCatSlug = get_queried_object()->slug;

$args = array(
  'post_type' => RICH_POST_TYPE,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => MAGAZINE_CATEGORY,
      'field'    => 'slug',
      'terms'    => array( get_queried_object()->slug ),
    ),
),);
$the_query_rich = new WP_Query($args);
$rich_first_post = $the_query_rich -> posts[0];

$args = array(
  'post_type' => REGULAR_POST_TYPE,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => MAGAZINE_CATEGORY,
      'field'    => 'slug',
      'terms'    => array( get_queried_object()->slug ),
      'operator' => 'IN'
    ),
  ),
);
$the_query_regular = new WP_Query($args);

$rich_post_count = $the_query_rich->post_count;
$regular_post_count = $the_query_regular->post_count;
?>

<main class="main">
  <div class="archive-content js-archive-content" data-color="<?php echo strtolower(str_replace(' ', '', $archiveCat));?>">
    <div class="archive-header">
      <div class="wrapper">
        <div class="archive-header-block">
          <div class="archive-catergory-group">
            <div class="archive-category-link-wrap">
              <?php if($archiveCatSlug == 'food') :?>
                <a class="archive-category-link" href="<?php echo get_term_link('lifestyle', MAGAZINE_CATEGORY) ?>">Life Style <span></span></a>
                <a class="archive-category-link" href="<?php echo get_term_link('beauty', MAGAZINE_CATEGORY) ?>">Beauty <span></span></a>
              <?php endif;?>
              <?php if($archiveCatSlug == 'lifestyle') :?>
                <a class="archive-category-link" href="<?php echo get_term_link('beauty', MAGAZINE_CATEGORY) ?>">Beauty <span></span></a>
                <a class="archive-category-link" href="<?php echo get_term_link('food', MAGAZINE_CATEGORY) ?>">Food <span></span></a>
              <?php endif;?>
              <?php if($archiveCatSlug == 'beauty') :?>
                <a class="archive-category-link" href="<?php echo get_term_link('food', MAGAZINE_CATEGORY) ?>">Food <span></span></a>
                <a class="archive-category-link" href="<?php echo get_term_link('lifestyle', MAGAZINE_CATEGORY) ?>">Life Style <span></span></a>
              <?php endif;?>
            </div>
            <h2 class="archive-category-current"><?php echo $archiveCat;?></h2>
          </div>
          <?php 
            $archiveCopy;
            if($archiveCat == 'Life Style') {
              $archiveCopy = '花を飾って、映画を観る。部屋を整え、<br class="show-sp">しっかり眠る。おうち時間を心地よく<br class="show-sp">楽しくするための暮らしのヒント';
            } elseif($archiveCat == 'Food') {
              $archiveCopy = '誰かと分けるひと皿も自分だけのひとさじも<br class="show-sp">もっと楽しくハッピーに　<br
              class="show-sp">あなたを満たすおいしいヒント';
            } else {
              $archiveCopy = '見た目だけじゃない、中身だけじゃない　<br class="show-sp">あなたにとっての美をつくる<br
              class="show-sp">ポジティブになるきれいのヒント';
            }
          ?>
          <p class="archive-header-copy"><?php echo $archiveCopy;?></p>
        </div>
      </div>
    </div>
    <div class="archive-wrapper">
      <div class="archive-block-pc">
        <div class="archive-rich-wrap js-archive-block">
          <?php if($the_query_rich->have_posts()) { ?>
          <div class="archive-rich js-archive-rich-content">
            <?php while( $the_query_rich->have_posts()) : $the_query_rich->the_post(); 
              $categories = get_the_terms(get_the_ID(), MAGAZINE_CATEGORY);
              $tax;
              foreach($categories as $category ) { 
                $tax = $category->name;
              }
              $series_number =  get_field('series_number');
            ?>
              <div class="archive-card-rich-wrap">
                <section class="archive-card-rich-inner">
                <a class="archive-card-rich" href="<?php echo get_permalink();?>">
                  <div class="archive-card-info"><strong><?php echo $tax;?></strong> | <time><?php echo get_the_time('M d,Y')?></time></div>
                  <div class="archive-card-rich-frame">
                    <div class="archive-card-rich-frame-inner">
                      <div class="archive-card-rich-image" style="background-image: url('<?php echo get_eyecatch_data(get_the_ID(), 'card-image-lg', ''); ?>')"></div>
                    </div>
                    <div class="archive-card-content">
                      <span class="archive-card-feature">Feature</span>
                      <?php import_part('number', array(
                        'modifier' => 'archive-card-series-number',
                        'category' => strtolower($tax),
                        'number' => $series_number
                      )); ?>
                      <p class="archive-card-series"><?php echo get_field('series_name')?></p>
                      <h2 class="archive-card-title"><?php echo get_the_title();?></h2>
                    </div>
                  </div>
                </a>
                </section>
              </div>
            <?php endwhile; ?>
          </div>
          <?php } ?>
        </div>
        <div class="archive-regular-wrap">
          <div class="archive-regular">
            <?php if($the_query_regular->have_posts()) { ?>
              <div class="archive-regular-content js-archive-regular-content">
                <?php while( $the_query_regular->have_posts()) : $the_query_regular->the_post(); 
                  $categories = get_the_terms(get_the_ID(), MAGAZINE_CATEGORY);
                  $tax;
                  foreach($categories as $category ) { 
                    $tax = $category->name;
                  }
                ?>

                  <?php import_part('card', array(
                    'modifier' => '',
                    'link' => get_permalink(),
                    'image' => get_eyecatch_data(get_the_ID(), 'card-image', ''),
                    'title' => get_the_title(),
                    'category' => strtolower($tax),
                    'time' => get_the_time('M d,Y'),
                  )); ?>
                <?php endwhile; ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="archive-block-sp">

<?php
$tax_term;
$cat_terms = get_the_terms($rich_first_post->ID, MAGAZINE_CATEGORY);
foreach($cat_terms as $category ) { 
  $tax_term = $category->name;
}
$series_numb = get_field('series_number', $rich_first_post->ID);
if($rich_first_post) {?>
  <article class="archive-sp-card archive-sp-card-rich archive-sp-card-rich-top">
    <a class="archive-card-rich" href="<?php echo get_permalink($rich_first_post->ID);?>">
      <div class="archive-card-info"><strong><?php echo $tax_term; ?></strong> | <time><?php echo get_the_time('M d,Y', $rich_first_post->ID)?></time></div>
      <div class="archive-card-rich-frame">
        <div class="archive-card-rich-image" style="background-image: url('<?php echo get_eyecatch_data($rich_first_post->ID, 'card-image-lg', ''); ?>')"></div>
        <div class="archive-card-content">
          <span class="archive-card-feature">Feature</span>
          <?php import_part('number', array(
            'modifier' => 'archive-card-series-number',
            'category' => strtolower($tax_term),
            'number' => $series_numb
          )); ?>
          <p class="archive-card-series"><?php echo get_field('series_name', $rich_first_post->ID)?></p>
          <h2 class="archive-card-title"><?php echo $rich_first_post->post_title;?></h2>
        </div>
      </div>
    </a>
  </article>
<?php } ?>

<?php
$args = array(
  'post_type' => array(REGULAR_POST_TYPE, RICH_POST_TYPE),
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'post__not_in'   => array( $rich_first_post->ID ),
  'tax_query' => array(
    array(
      'taxonomy' => MAGAZINE_CATEGORY,
      'field'    => 'slug',
      'terms'    => array( get_queried_object()->slug ),
      'operator' => 'IN'
    ),
  ),
);
$queryBoth = new WP_Query( $args );
?>

<?php

if($queryBoth->have_posts()) { ?>
<?php while( $queryBoth->have_posts()) : $queryBoth->the_post(); 
$categories = get_the_terms(get_the_ID(), MAGAZINE_CATEGORY);
$tax;
foreach($categories as $category ) { 
  $tax = $category->name;
}
$series_number =  get_field('series_number');
?>

<?php if(get_post_type(get_the_ID()) == 'rich') :?>
  <article class="archive-sp-card archive-sp-card-rich">
    <a class="archive-card-rich" href="<?php echo get_permalink();?>">
      <div class="archive-card-info"><strong><?php echo $tax;?></strong> | <time><?php echo get_the_time('M d,Y')?></time></div>
      <div class="archive-card-rich-frame">
        <div class="archive-card-rich-image" style="background-image: url('<?php echo get_eyecatch_data(get_the_ID(), 'card-image-lg', ''); ?>')"></div>
        <div class="archive-card-content">
          <span class="archive-card-feature">Feature</span>
          <?php import_part('number', array(
            'modifier' => 'archive-card-series-number',
            'category' => strtolower($tax),
            'number' => $series_number
          )); ?>
          <p class="archive-card-series"><?php echo get_field('series_name')?></p>
          <h2 class="archive-card-title"><?php echo get_the_title();?></h2>
        </div>
      </div>
    </a>
  </article>
<?php else: ?>
<?php import_part('card', array(
    'fortransition' => 'archive-sp-card',
    'modifier' => 'archive-card-horizontal',
    'link' => get_permalink(),
    'image' => get_eyecatch_data(get_the_ID(), 'card-image', ''),
    'title' => get_the_title(),
    'category' => strtolower($tax),
    'time' => get_the_time('M d,Y'),
  )); ?>
<?php endif; ?>

<?php endwhile; ?>
<?php } ?>
      </div>
    </div>

      <div class="wrapper">
        <label class="archive-view-more" href="">VIEW MORE <span></span></label>
      </div>

  </div>

  <?php import_part('recommend', array(
    'modifier' => '',
    'term' => $archiveCatSlug
  )); ?> 

  <?php import_part('tips'); ?>
  <div class="archive-loader">
  </div>
</main>
<?php
get_footer();