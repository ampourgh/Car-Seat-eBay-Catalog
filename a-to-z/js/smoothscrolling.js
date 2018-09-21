 // animation when clicking link that directs to a different part of the page

$(function() {

  $('#navbar a').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 250, 'linear');
  });

  $('#scroll-down').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 250, 'linear');
  });

  $('.goHome').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 250, 'linear');
  });
  
});
