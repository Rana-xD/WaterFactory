$(function(){
    $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).slideDown(300);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).slideUp(300);
        });
});
