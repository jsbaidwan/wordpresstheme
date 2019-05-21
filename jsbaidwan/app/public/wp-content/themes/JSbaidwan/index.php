<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);

$blogposts = new WP_Query($args); // Deals with what type of query is required for the page.

  while($blogposts->have_posts()) { //Dispaly the posts using loop
    $blogposts->the_post();  // Here we are running these methods on $blogposts object
 ?>

  <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
  </a>
  <?php the_excerpt(); ?>
<?php
  }
?>

<?php get_footer(); ?>