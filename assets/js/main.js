/**
 * #HOME - Header hide on scroll down and show on scroll up
 */
$(document).ready(function () {

  'use strict';

  var c, currentScrollTop = 0,
    header = $('#header');

  $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = header.height();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      header.addClass("scrollUp");
    } else if (c > currentScrollTop && !(a <= b)) {
      header.removeClass("scrollUp");
    }
    c = currentScrollTop;
  });

});

/**
 * #PROFILE - Top Nav hide on scroll down and show on scroll up
 */
$(document).ready(function () {

  'use strict';

  var c, currentScrollTop = 0,
    nav = $('.profile-top-nav');

  $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = nav.height();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      nav.addClass("scrollUp");
    } else if (c > currentScrollTop && !(a <= b)) {
      nav.removeClass("scrollUp");
    }
    c = currentScrollTop;
  });

});

/**
 * Redirect to pages on click
 */
function homeIconClick() {
  window.location.assign("/flexomate/");
}

function chatIconClick() {
  window.location.assign("/flexomate/chat/");
}

function searchIconClick() {
  window.location.assign("/flexomate/search/");
}

function newPostIconClick() {
  window.location.assign("/flexomate/new-post/");
}

function videoClipsIconClick() {
  window.location.assign("/flexomate/video-clips/");
}

function myProfileIconClick() {
  window.location.assign("/flexomate/test_user/");
}


/**
 * #HOME - Suggestion Item Hide
 */
$('.suggestion-item .suggestion-heading-cross').click(function () {
  $('#today-picks').remove();
  $('#home').css("margin", "calc(let(--#header-height)) 0 0 0")
});

/**
 * #CHAT - Reload Button Config
 */
$('.chat-top-nav-reload-btn').click(function () {
  location.reload(true);
});

/**
 * #SEARCH - Search Box Functionalities
*/
let searchInputField = $('.search-input-field');

searchInputField.focus(function () {
  $('.search-icon').css("color", "var(--primary-text)")
});

searchInputField.keydown(function () {
  $('.search-cross-icon').removeClass("hidden");
});

searchInputField.keyup(function (e) {
  if (e.keyCode == 8) {
  $('.search-cross-icon').addClass("hidden");
  }
});

$('.search-cross-icon').click(function () {
  $(this).addClass("hidden");
  searchInputField.val('');
  searchInputField.focus();
});
