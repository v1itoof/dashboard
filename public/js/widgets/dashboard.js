$(document).ready(function() {

    $('body').on('click', '#toggle-btn', function(e) {
        e.preventDefault();

        console.log('teste');
        $('#sidebar').toggleClass("expand");
    });
});
