$(document).ready(function() {

    //TODO P2 : réorganisation fichier js en les separant par categorie (serie, presentation etc...)


    /* PRESENTATION START */
    $('.mdl-textfield__input-time').on('change', function() {
        var valueInSec = 0;
        if($('#minute').val() != '') {
            valueInSec += parseInt($('#minute').val()*60);
        }
        if($('#second').val() != '') {
            valueInSec += parseInt($('#second').val());
        }
        $('#appbundle_presentation_presentationDuration').val(valueInSec);
    });
    /* PRESENTATION END */



    /* SERIE START */
    $('.mdl-timepicker__input').bootstrapMaterialDatePicker({
        date: false,
        format: 'HH:mm'
    });

    // set symfony form input heureDebut and heureFin when change material time picker
    $('.mdl-timepicker__input').on('change', function() {
        var formInputTimeHourSelector = '#appbundle_serie_' + this.id + '_hour';
        var formInputTimeMinuteSelector = '#appbundle_serie_' + this.id + '_minute';
        $(formInputTimeHourSelector).val(parseInt(this.value.split(':')[0]));
        $(formInputTimeMinuteSelector).val(parseInt(this.value.split(':')[1]));
    });

    //presentations list sortable
    $( "#sortable" ).sortable();

    $(document).on("click", ".mdl-chip__action", function() {
        //$('#getOrder').prop('disabled', false);
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

    //$('#getOrder').on('click', function () {
    $('form[name=appbundle_serie]').on('submit', function () {

        console.log('submit');

        var presentationOrder = $( "#sortable" ).sortable('toArray');
        $.ajax({
            method: 'post',
            data: {
                presentationOrder: presentationOrder
            },
            success: function() {
                var notification = document.querySelector('.mdl-js-snackbar');
                var data = {
                    message: 'La série a été mise à jour',
                    timeout: 10000
                };
                notification.MaterialSnackbar.showSnackbar(data);
            },
            error: function () {
                console.log('error');
            }
        })


    });


    //var deleteButton = document.querySelector('button[name=serieDelete]');
    var deleteButton = document.querySelector('.deleteConfirmDialog');
    var dialog = document.querySelector('dialog');
    deleteButton.addEventListener('click', function() {
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
    });
    dialog.querySelector('.validate').addEventListener('click', function() {
        switch($(this).attr('data-designation')) {
            case 'série':
                window.location.replace(location.origin + '/serie/' + $(this).attr('data-elementId') + '/delete');
                break;
            case 'présentation':
                window.location.replace(location.origin + '/presentation/' + $(this).attr('data-elementId') + '/delete');
                break;
        }

    });


    // TODO P3 : detection automatique de la durée des slides en fonction de l'url de google slide et de la duree de presentation en fonction du nb de slides et de la durée de transition


});


