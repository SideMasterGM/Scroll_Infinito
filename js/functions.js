$(document).ready(function() {
    jQuery.ias({
        container : '.container', 
        item: '.post', 
        pagination: '.nav', 
        next: '.nav a', 
        loader: '<img src="img/ajax-loader.gif"/>',
        triggerPageThreshold: 3 
    });
});