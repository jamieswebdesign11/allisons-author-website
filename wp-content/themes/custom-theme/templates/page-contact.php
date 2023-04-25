<!--/**
* Template Name: Contact Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerImage = $bannerGroup['banner_image']; $caption = $bannerGroup['caption']; $captionColor = $bannerGroup['caption_color'];
$mainGroup = get_field('main_group'); 
$mainHeading = $mainGroup['main_heading']; $mainContent = $mainGroup['main_content']; $formShortcode = $mainGroup['form_shortcode'];
?>
<div id="banner">
    <div class="banner-inner">
        <?php echo $bannerImage ? '<img class="banner-img img-responsive" src="'. $bannerImage['url'] .'" title="'. $bannerImage['title'] .'" alt="'. $bannerImage['alt'] .'">' : ''; ?>
        <?php echo $caption ? '<div class="caption"'. ($captionColor ? ' style="color:'. $captionColor .'"' : '') .'>'. $caption .'</div>' : ''; ?>
    </div>
</div>
<div class="full-page">
    <div class="full-page-content">
        <div class="page-content">
            <div id="main">
                <div class="main-inner flex-container">
                    <?php echo $mainHeading ? '<h1>'. $mainHeading .'</h1>' : ''; ?>
                    <?php echo $mainContent ? $mainContent : ''; ?>
                    <?php echo $formShortcode ? $formShortcode : ''; ?>
                </div>
            </div>
        </div>
        <?php endwhile; endif; get_footer(); ?>
