<!--/**
* Template Name: Home Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerImage = $bannerGroup['banner_image']; $caption = $bannerGroup['caption']; $captionColor = $bannerGroup['caption_color'];
$mainGroup = get_field('main_group'); 
$mainHeading = $mainGroup['main_heading']; $mainContent = $mainGroup['main_content']; $imageLinkImg = $mainGroup['image_link_image']; $imageLinkUrl = $mainGroup['image_link_url'];
$newsletterSignup = get_field('newsletter_signup');
$newsletterHeading = $newsletterSignup['newsletter_heading']; $newsletterForm = $newsletterSignup['newsletter_form'];
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
                    <?php if($imageLinkUrl || $imageLinkImg) : ?>
                    <div class="image-link">
                        <?php echo $imageLinkUrl ? '<a href="'. $imageLinkUrl['url'] .'" title="'. $imageLinkUrl['title'] .'" alt="'. $imageLinkUrl['title'] .'"'. ($imageLinkUrl['target'] ? ' target="_blank"' : '') .'>' : ''; ?>
                        <?php echo $imageLinkImg ? '<img class="image-link-img img-responsive" src="'. $imageLinkImg['url'] .'" title="'. $imageLinkImg['title'] .'" alt="'. $imageLinkImg['alt'] .'">' : ''; ?>
                        <?php echo $imageLinkUrl ? '</a>' : ''; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div id="newsletter-signup">
                <div class="newsletter-signup-inner flex-container">
                    <?php echo $newsletterHeading ? '<h2>'. $newsletterHeading .'</h2>' : ''; ?>
                    <?php echo $newsletterForm ? $newsletterForm : ''; ?>
                </div>
            </div>
        </div>
        <?php endwhile; endif; get_footer(); ?>
