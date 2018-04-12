'use strict';
// Document loaded
jQuery(document).ready($ => {
  // Remove inline styling on sub-menu so that fading works
  $('.menu-item-has-children .sub-menu').removeAttr('style');

  // Same hover effect on thumbs for touch devices
  $('.ftg-items > .tile').on('touchstart', e => !$(e.currentTarget).hasClass('hover') ? $(e.currentTarget).addClass('hover') : true);

    /*var link = $(e.currentTarget);
    if (link.hasClass('hover')) {
      return true;
    } else {
      link.addClass('hover');
      $('.ftg-items > .tile').not(link).removeClass('hover');
      // e.preventDefault();
      // return false;
    }
  });*/

  $('.ftg-items > .tile').on('touchend', e => $(e.currentTarget).hasClass('hover') ? $(e.currentTarget).removeClass('hover') : true);

    /*var link = $(e.currentTarget);
    if (link.hasClass('hover')) {
      link.removeClass('hover');
      return true;
    }
  });*/

  // Same hover effect on contacts for touch devices
  $('.site-footer .contacts > div').on('touchstart', e => !$(e.currentTarget).hasClass('hover') ? $(e.currentTarget).addClass('hover') : true);
  $('.site-footer .contacts > div').on('touchend', e => $(e.currentTarget).hasClass('hover') ? $(e.currentTarget).removeClass('hover') : true);

  // Prevent click on phone number for non touch devices
  let isTouch = false;
  $('.site-footer .contacts .phone--url').on('touchstart', e => isTouch = true);
  $('.site-footer .contacts .phone--url').on('click', e => !isTouch ? (e.preventDefault(), false) : true);
});

// Window loaded
jQuery(window).ready($ => {
  // Set same heights on thumbs
  const setThumbHeights = () => {
    $('.ftg-items > .tile').removeAttr('style');

    if (window && window.innerWidth < 768) return; 

    let maxHeight = 0;
    $('.ftg-items > .tile').each((index, item) => maxHeight = $(item)[0].clientHeight > maxHeight ? $(item)[0].clientHeight : maxHeight);
    $('.ftg-items > .tile').each((index, item) => $(item).height(maxHeight));
  };
  setThumbHeights();

  window.addEventListener("resize", setThumbHeights);
});