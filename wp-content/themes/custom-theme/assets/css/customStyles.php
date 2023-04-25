<style>
    
    <?php //Site Colors	
    $siteColors=get_field('site_colors', 'options');
    $siteBackgroundColor=$siteColors['site_background_color'];
    $siteAccentColor=$siteColors['site_accent_color'];
    $siteTextColor=$siteColors['site_text_color'];
    ?>
    
    body, .full-page-content, #header {background: <?php echo $siteBackgroundColor; ?>;}
    h1:after, h2:after, #newsletter-signup form .af-submit button, form .af-submit button {background: <?php echo $siteAccentColor; ?>;}
    .menu li a:hover, .dropdown-menu a:hover {color: <?php echo $siteAccentColor; ?>;}
    #header, #banner {border-color: <?php echo $siteAccentColor; ?>;}
    body, .menu li a {color: <?php echo $siteTextColor; ?>;}

</style>
