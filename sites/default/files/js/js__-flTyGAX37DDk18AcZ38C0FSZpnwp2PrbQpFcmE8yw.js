/*!
 * jQuery Once v2.2.3 - http://github.com/robloach/jquery-once
 * @license MIT, GPL-2.0
 *   http://opensource.org/licenses/MIT
 *   http://opensource.org/licenses/GPL-2.0
 */
(function(e){"use strict";if(typeof exports==="object"&&typeof exports.nodeName!=="string"){e(require("jquery"))}else if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(t){"use strict";var r=function(e){e=e||"once";if(typeof e!=="string"){throw new TypeError("The jQuery Once id parameter must be a string")}return e};t.fn.once=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)!==true}).data(n,true)};t.fn.removeOnce=function(e){return this.findOnce(e).removeData("jquery-once-"+r(e))};t.fn.findOnce=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)===true})}});

/**
 * Views exposed filter autosubmit js for Drupal 8.
 */

(function ($, drupalSettings) {

Drupal.behaviors.ViewsAutoSubmit = {
  attach: function(context) {
    // 'this' references the form element.
    function triggerSubmit (e) {
      var $this = $(this);
      if (!$this.hasClass('views-ajaxing')) {
        $this.find('.views-auto-submit-click').click();
      }
    }

    // the change event bubbles so we only need to bind it to the outer form
    $('form.views-auto-submit-full-form, .views-auto-submit-full-form form', context)
      .add('.views-auto-submit', context)
      .filter('form, select, input:not(:text, :submit)')
      .once('views-auto-submit')
      .change(function (e) {
        // don't trigger on text change for full-form.
        if ($(e.target).is(':not(:text, :submit)')) {
          triggerSubmit.call(e.target.form);
        }
      });

    // e.keyCode: key
    var discardKeyCode = [
      16, // shift
      17, // ctrl
      18, // alt
      20, // caps lock
      33, // page up
      34, // page down
      35, // end
      36, // home
      37, // left arrow
      38, // up arrow
      39, // right arrow
      40, // down arrow
       9, // tab
      13, // enter
      27  // esc
    ];
    // Don't wait for change event on textfields.
    $('.views-auto-submit-full-form input:text, input:text.views-auto-submit', context)
      .once('views-auto-submit').each(function() {
        // Each text input element has his own timeout.
        var timeoutID = 0;
        $(this)
          .bind('keydown keyup', function (e) {
            if ($.inArray(e.keyCode, discardKeyCode) === -1) {
              timeoutID && clearTimeout(timeoutID);
            }
          })
          .keyup(function(e) {
            if ($.inArray(e.keyCode, discardKeyCode) === -1) {
              timeoutID = setTimeout($.proxy(triggerSubmit, this.form), 500);
            }
          });
      });
  }
}
}(jQuery, drupalSettings));
;
