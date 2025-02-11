/**
 * @file
 * Awesome behaviors.
 */
(function (Drupal, $) {
  'use strict';

  Drupal.behaviors.awesome = {
    attach(context, settings) {

    }
  };

  $(document).ready(function () {
    let hamburger = document.querySelector(".hamburger");
    let menu = document.querySelector(".main-menu");

    hamburger.addEventListener("click", function () {
      this.classList.toggle("is-active");
      menu.classList.toggle("is-active");
    });
  });
}(Drupal, jQuery));
