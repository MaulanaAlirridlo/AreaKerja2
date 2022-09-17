require('./bootstrap');

$('.hover').hover(
  function() {
    $(this).prev().addClass( "blur" );
  }, function() {
    $(this).prev().removeClass( "blur" );
  }
);