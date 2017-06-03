/*function modalheight(){
  var windowheight = $(window).height();
  $('.reveal').css({'height':windowheight + 'px'});
  console.log(windowheight);
}
  modalheight();
*/

/*$(function(){
  $('body').is('.is-reveal-open', function(){
    $(this).find('.reveal-overlay').css({'display':'flex !important'});
  });
});*/


$(function(){
  $('#gallery a').on('click', function(){
    var image = $(this).find('img').attr('src');
    var imageselected = image.split('thumbnail');
    var fullPath = imageselected[0] + 'fullsize' + imageselected[1];
    $('#modal-gallery #image-container').attr('src', fullPath);
  });
});

$(document).foundation();
