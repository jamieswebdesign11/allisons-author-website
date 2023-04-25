//Check if IE Function
function isIE() {
    ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
    return is_ie;
}
//Sanatize String Function
function sanitize(str) {
    var sani = str.replace(/[^A-Z0-9]/ig, " "); // Removes Special Charaters with Spaces 
    sani = sani.replace(/^(\s*)([\W\w]*)(\b\s*$)/g, '$2');
    return sani.replace(/\b[a-z]/gi, function (char) { // Caps First leter From Words 
        return char.toUpperCase();
    });
}
//Add Alt/Title tags to links that don't have them
$('a').each(function () {
    if ($(this).attr('title') === undefined && $(this).attr('alt') === undefined) {
        var linkTxt = $(this).text();
        if (linkTxt.length >= 2) {
            $(this).attr({
                title: linkTxt,
                alt: linkTxt
            });
        } else {
            var linkLocation = $(this).attr('href');
            if (linkLocation == undefined) {} else {
                var sanitized = sanitize(linkLocation);
                $(this).attr({
                    title: sanitized,
                    alt: sanitized
                });
            }
        }
    } else {
        var title = $(this).attr('title');
        var alt = $(this).attr('alt');
        switch (title) {
            case undefined:
                $(this).attr({
                    title: alt
                });
                break;
        }
        switch (alt) {
            case undefined:
                $(this).attr({
                    alt: title
                });
                break;
        }
    }
});

//Mobile Menu Toggle
/*
$('.mobile-menu-toggle').click(function(){
    $('.left-col').slideToggle();
    $(this).children('span').toggleClass('fa-bars fa-times');
    $('body').toggleClass('no-scroll');
});
*/