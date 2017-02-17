/* JSSite for Polaris Wordpress Theme*/

$(function () {
     $('.content').hide();
     $('a.read').click(function () {
         $(this).parent('.excerpt').hide();
         $(this).closest('.dynamic').find('.content').slideDown('fast');
         return false;
     });
     $('a.read-less').click(function () {
         $(this).parent('.content').slideUp('fast');
         $(this).closest('.dynamic').find('.excerpt').show();
         return false;
     });
 });
 