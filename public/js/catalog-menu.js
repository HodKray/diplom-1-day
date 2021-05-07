$(document).ready(function () {
    $("#catalog-menu-btn").on('click', function () {
        console.log('123');
        if ( $('.catalog-menu').is(':visible') ) {
            $('.catalog-menu').hide();
        } else {
            $('.catalog-menu').show();
        }
    });
});


