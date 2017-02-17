/* Polaris Javascript File for Polaris Wordpress Theme */

$(document).ready(function() {
 $('.excerpt').hide();
 $('.post-holder').each(function() {
  var dynamic = $(this).find('.dynamic');
  if (!(dynamic.length == 0)) {
   var staticDiv = $(this).find('.static');
   staticDiv.height(dynamic.height());
  }
 });
 $('.excerpt').show();
});