$ = jQuery.noConflict();


$(function(){
  $('#gallery a').on('click', function(){
    var image = $(this).find('img').attr('src');
    var imageselected = image.split('thumbnail');
    var fullPath = imageselected[0] + 'fullsize' + imageselected[1];
    $('#modal-gallery #image-container').attr('src', fullPath);
  });
});

$(document).foundation();
