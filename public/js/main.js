$(document).ready(function() {
    $('ul.show li a:first');
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('ul.show li a').click(function() {
        $('.secciones article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });
});