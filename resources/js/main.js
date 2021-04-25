$(document).ready(function() {
    $('.menu li:has(ul)').click(function(e) {
        e.preventDefault();
    });
});