/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
jQuery(document).ready(function($){
particlesJS.load('particles-js', 'wp-content/themes/picostrap5/js/particles/assets/particlesjs-config.json', function() {
  console.log('callback - particles.js config loaded');
})
})