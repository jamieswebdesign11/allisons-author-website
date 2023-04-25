<!--/**
* Template Name: About Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerImage = $bannerGroup['banner_image']; $caption = $bannerGroup['caption']; $captionColor = $bannerGroup['caption_color'];
$mainGroup = get_field('main_group'); 
$mainHeading = $mainGroup['main_heading']; $mainContent = $mainGroup['main_content']; $mainImage = $mainGroup['main_image'];
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
            <div id="about-main">
                <div class="about-main-inner flex-container flex-display-align">
                    <?php echo $mainImage ? '<div class="about-main-img flex-30"><img class="about-img img-responsive" src="'. $mainImage['url'] .'" title="'. $mainImage['title'] .'" alt="'. $mainImage['alt'] .'"></div>' : ''; ?>
                    <div class="main-about-content flex-70">
                        <?php echo $mainHeading ? '<h1>'. $mainHeading .'</h1>' : ''; ?>
                        <?php echo $mainContent ? $mainContent : ''; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; get_footer(); ?>
