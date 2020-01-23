// // UTILITY FUNCTIONS
// // ========================================================================
// // Console fix
// // -------------------------------------------------------------------
// (function() {
//   if (!window.console) {
//     window.console = {};
//   }
//   // union of Chrome, FF, IE, and Safari console methods
//   var m = [
//     "log", "info", "warn", "error", "debug", "trace", "dir", "group",
//     "groupCollapsed", "groupEnd", "time", "timeEnd", "profile", "profileEnd",
//     "dirxml", "assert", "count", "markTimeline", "timeStamp", "clear"
//   ];
//   // define undefined methods as noops to prevent errors
//   for (var i = 0; i < m.length; i++) {
//     if (!window.console[m[i]]) {
//       window.console[m[i]] = function() {};
//     }
//   }
// })();

// // Script Loader (previously minified)
// // ---------------------------------------------------------------------
// function getScripts(o, t) {
//   for (var i = 0; i < o.length; ++i) {
//     var r = path + o[i];
//     $.importJS(r, {
//         cache: t
//     }).done(function() {
//         console.log("SUCCESS: loaded script >> " + r)
//     }).fail(function(o) {
//         console.log("ERROR: can't load script >> " + r + " << " + o.statusText)
//     })
//   }
// }
// jQuery.importJS = function(o, t) {
//   return t = $.extend(t || {}, {
//     dataType: "script",
//     url: o,
//     async: !1
//   }), jQuery.ajax(t)
// };

// // Scripts for loading
// // =========================================================================
// var path = "js/"; // Paths are relative to the page loading this script!
// var scripts = [

//   "uikit-utils.js",
//   "jquery.bxslider-rahisified.js",
//   "jquery-ui.min.js",
//   "highlight.pack.js",
//   "bootstrap.min.js",
//   "jquery-scrollto.js",
//   "jquery.prettyPhoto.js",
//   "wow.min.js",
//   "theme.js",
//   "style-switcher.js",
// ];

// // IMPORTANT: To force caching change false to true
// // ==========================================================================
// getScripts(scripts, false);

// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}',
// // '{{ URL::asset("public/lib/Template/uikit/js/uikit-utils.js") }}'
