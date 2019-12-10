var images = ['cesta_vrbka.jpg', 'cesta_vrbovce.jpg', 'kubikuv_vrch.jpg', 'kuzelov.jpg'];
var image_index = Math.floor(Math.random() * images.length);
var bg_height = $(window).height() - $('nav').outerHeight();
console.log($('nav').outerHeight());
$('.bg').css({'background-image': 'url(gallery/' + images[image_index] + ')'});
$('.bg').css({'height' : bg_height + 'px'});
$('body').css({'padding-top' : $('nav').outerHeight() + 'px'});
switch(image_index) {
    case 0:
        $('.bg').css({'background-position': '42% 0%'});
        break;
    case 1:
        $('.bg').css({'background-position': '42% 0%'});
        break;
    case 2:
        $('.bg').css({'background-position': '85% 0%'});
        break;
    case 3:
        $('.bg').css({'background-position': '30% 0%'});
        break;
    default:
        break;
}