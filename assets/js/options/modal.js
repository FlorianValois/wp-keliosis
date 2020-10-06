function wpkModal(options) {

  if (options.type) {
    var type = options.type;
  }

  if (options.title) {
    var title = options.title;
  }

  if (options.phrase) {
    var phrase = options.phrase;
  }

  var modal = '<div id="wpk-modal"></div>';

  var contentModal =
    '<span>' + title + '</span>' +
    '<p>' + phrase + '</p>';

  if ($('#wpk-modal').length) {
    $('#wpk-modal').remove();
  }

  $(modal).hide().fadeIn(300).insertAfter('.wpk-form');

  $('#wpk-modal').addClass('wpk-modal-' + type);
  $('#wpk-modal').html(contentModal);
  $('#wpk-modal').delay(3000).fadeOut(300);

}