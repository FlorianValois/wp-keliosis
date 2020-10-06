$('.wpk-form').on('submit', function (event) {
  event.preventDefault();

  var form = $(this).serialize();

  $.each($('.wpk-form input[type=checkbox]')
    .filter(function (idx) {
      return $(this).prop('checked') === false
    }),
    function (idx, el) {
      form += '&' + $(el).attr('name') + '=' + 0;
    }
  );

  var postData = {
    action: 'wpk__save_data',
    form: form
  }

  $.ajax({
    type: "POST",
    data: postData,
    url: wpk_ajax.ajaxurl,
    dataType: 'json',
    success: function (response) {
//      console.log(response);
      if (response.update === true) {
        wpkModal({
          type: 'success',
          title: wpk_ajax.wpk_form_save_title_success,
          phrase: wpk_ajax.wpk_form_save_message_success
        });
      } else if (response.update === false) {
        wpkModal({
          type: 'warning',
          title: wpk_ajax.wpk_form_save_title_warning,
          phrase: wpk_ajax.wpk_form_save_message_warning
        });
      } else {
        wpkModal({
          type: 'error',
          title: wpk_ajax.wpk_form_save_title_error,
          phrase: wpk_ajax.wpk_form_save_message_error
        });
      }
    }
  });

});