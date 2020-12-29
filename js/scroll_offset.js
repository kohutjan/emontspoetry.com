
var offset = $('nav').outerHeight();

let vh = window.innerHeight;
let rest = vh - $('nav').outerHeight();
$('.col-scroll').css({'max-height' : rest + 'px'});

$('.list-group a').click(function(event) {
    event.preventDefault();
    $($(this).attr('href'))[0].scrollIntoView();
    scrollBy(0, -offset);
});
