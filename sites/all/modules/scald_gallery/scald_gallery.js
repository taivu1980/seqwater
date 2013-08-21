/**
 * @file
 * Scald Gallery JS integration.
 */

(function($) {

Drupal.behaviors.scald_gallery = {
  attach: function(context, settings) {
    // If there are atom reference fields, put the library over the modal so
    // that atoms can be dragged and dropped from the library into the modal.
    // The prefered approach is to shift the modal. But it is more complicated
    // to do so.
    if ($('#modalContent').find('.field-type-atom-reference').length) {
      Drupal.behaviors.scald_gallery.config.zIndex = $('.dnd-library-wrapper').css('z-index');
      $('.dnd-library-wrapper').css({
        'z-index': 1002
      });
    };

    // Use gallery modal settings for gallery atoms.
    // Do not not use $('...', context) or the add gallery button does not work
    // in the first place.
    $('.dnd-library-wrapper')
      .find('.meta.type-gallery .edit a, .add-buttons .add-gallery a')
      .removeClass('ctools-modal-custom-style')
      .addClass('ctools-modal-scald_gallery');
  },
  detach: function(context, settings) {
    $('.dnd-library-wrapper').css({
      'z-index': Drupal.behaviors.scald_gallery.config.zIndex
    });
  },
  config: {
    zIndex: 999
  }
};

$(document).bind('CToolsDetachBehaviors', Drupal.behaviors.scald_gallery.detach);
$(document).bind('CToolsDetachBehaviors', function() {
  console.log('detach');
});

}) (jQuery);

