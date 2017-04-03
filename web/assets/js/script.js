$(document).ready(function() {

    $( "#sortable" ).sortable();

    // TODO P1 : bug changement d'ordre non détecté pour enable bouton enregistrer

    $(document).on("click", ".mdl-chip__action", function() {
        $('#getOrder').prop('disabled', false);
        var link = $(this);
        var action = link.attr('data-action');
        var presentationId = link.attr('data-presentation-id');
        var presentationName = link.attr('data-presentation-name');

        switch(action) {
            case 'add':
                var itemToInsert = "" +
                    "<span class='mdl-chip' id='" + presentationId + "'>" +
                    "<span class='mdl-chip__text'>" + presentationName + "</span>" +
                    "<a href='#' class='mdl-chip__action' data-action='remove' '><i class='material-icons'>cancel</i></a>" +
                    "</span></span>";
                $('#sortable').append(itemToInsert);
                break;

            case 'remove':
                link.parent().remove();
                break;
        }
    });

    $('#getOrder').on('click', function () {

        var presentationOrder = $( "#sortable" ).sortable('toArray');
        $.ajax({
            method: 'post',
            data: {
                presentationOrder: presentationOrder
            },
            success: function() {
                console.log('success');
            },
            error: function () {
                console.log('error');
            }
        })


    });

    // TODO P3 : detection automatique de la duree de presentation en fonction du nb de slides et de la durée de transition


});


