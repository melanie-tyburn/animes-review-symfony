$(document).ready(function() {
    $('#genre-filter, #type-filter, #notation-filter').change(function() {
        var genre = $('#genre-filter').val();
        var type = $('#type-filter').val();
        var notation = $('#notation-filter').val();

        $('.anime').each(function() {
            var animeGenre = $(this).find('.genre').text().toLowerCase();
            var animeType = $(this).find('.type').text().toLowerCase();
            var animeNotation = $(this).find('.notation').text();
            if (((animeGenre !== genre && genre !== "")) || (animeType !== type && type !== "") || (animeNotation !== notation && notation !== "")) {
                $('.anime').hide();
            } else {
                $('.anime').show();
            }
        });
    });
});