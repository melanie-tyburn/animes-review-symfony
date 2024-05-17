$(document).ready(function() {
    $('#genre-filter, #type-filter, #notation-filter').change(function() {
        var genre = $('#genre-filter').val().toLowerCase();
        var type = $('#type-filter').val().toLowerCase();
        var notation = $('#notation-filter').val();

        $('.anime').each(function() {
            var animeGenre = $(this).find('.genre').text().toLowerCase();
            var animeType = $(this).find('.type').text().toLowerCase();
            var animeNotation = $(this).find('.notation').text();

            // Logique de filtrage corrigée
            if ((genre === "" || animeGenre.includes(genre)) &&
                (type === "" || animeType.includes(type)) &&
                (notation === "" || animeNotation === notation)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});