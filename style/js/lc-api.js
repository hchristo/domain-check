/*  _    _          ___           __ _     (R)
 * | |  (_)_ _____ / __|___ _ _  / _(_)__ _
 * | |__| \ V / -_) (__/ _ \ ' \|  _| / _` |
 * |____|_|\_/\___|\___\___/_||_|_| |_\__, |
 *                                    |___/
 * Copyright (c) 2009-2012 Keppler IT GmbH.
 * ---------------------------------------------------------------------------
 * $Id: lc-api.js 1717 2012-08-09 15:15:25Z kk $
 *
 * lc-api.js
 * JavaScript utility functions for LiveConfig IFRAME API
 * ---------------------------------------------------------------------------
 */

if (window.jQuery) {
  // use jQuery to add onDOMReady event
  $(function(){ sendHeight(); });
} else {
  // no jQuery available - build own handler
  window.onDomReady = function (fn) {
    if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded", fn, false);
    } else {
      document.onreadystatechange = function() {
        if (document.readyState == "interactive" || document.readyState == "complete") {
          fn(); document.onreadystatechange = function(){};
        }
      };
    }
  };
  window.onDomReady(sendHeight);
}
function sendHeight() {
  var h = document.body.offsetHeight;
  if (window.postMessage) {
    // use HTML5 window.postMessage
    if (window.parent) window.parent.postMessage('h=' + h, '*');
  } else {
    // try location hash workaround:
    if (location.hash === '') location.hash = 'h=' + h;
  }
}


/* <EOF> ------------------------------------------------------------------ */
