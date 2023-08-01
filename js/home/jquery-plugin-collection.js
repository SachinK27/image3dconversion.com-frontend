/*
@Author: ThemeMascot
@URL: http://ThemeMascot.com

Necessary jQuery Collection
*/

/**
 * Table of Contents:
 *
 *  jQuery Cookie Plugin v1.4.1
 *  jquery.easing.1.3.js for piechart smoothness and other
 *  jquery.scrollTo
 *  jquery.localScroll
 *  SmoothScroll for websites
 *  jQuery appear plugin
 *  modernizr
 *  scrollToFixed
 *  Menuzord - Responsive Megamenu
 *  jQuery Isotope
 *  jquery parallax
 *  animateNumbers
 *  jflickrfeed
 *  fitvids
 *  Retina.js
 *  ajaxchimp
 *  tweetie
 *  menufullpage
 *  WOW animation
 *  Typed Animation
 *  Owl carousel
 *  FlexSlider
 *  Magnific Popup
 *  Nivo Lightbox
 *  PrettyPhoto Lightbox
 *  equalHeights
 *  Maximage Slider
 *  BxSlider
 *  moment.js
 *  Clock1 - The Final Countdown
 *  Clock2 - flipclock
 *  instafeed.js
 *  jQuery Validation
 *  jQuery Form
 *  code highlight
 *  YTPlayer
 *  Infinite Scroll
 *  jQuery Pagination Plugin
 *  Vide jQuery plugin for video backgrounds
 *	Datepicker for Bootstrap
 *  jquery-timepicker
 *  bootstrap-datetimejs
 *  datepair.js
 *  easy-pie-chart
 *	jquery.ddslick.min.js
 *  FullCalendar
 *  
 *  
 *  
 *  
 *  
* ===============================================
*/

/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
!function(e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function(e) {
    var c = /\+/g
      , u = e.cookie = function(t, c, s) {
    }
    ;
    u.defaults = {},
    e.removeCookie = function(n, o) {
        return e.cookie(n, "", e.extend({}, o, {
            expires: -1
        })),
        !e.cookie(n)
    }
});
