$(document).ready(function() {

    $( "#sortable" ).sortable();

    // TODO bug changement d'ordre non détecté pour enable la sauvegarde

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

    // TODO detection automatique de la duree de presentation en fonction du nb de slides et de la durée de transition


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
        //quand je clique sur save je récupère l'ordre des prséentations et les ajoute dans un param post et jen'envoi en requête ajax


    });


    $.ajax({
        url: 'http://sevignemiroir.local/display',
        contentType:  "application/json",
        dataType: 'html',
        crossDomain: true,
        //dataType: 'html',
        success: function(response) {
            console.log('success');
            console.log(response);
        },
        error: function (response) {
            console.log('error');
            console.log(response);
        }
    })



});


