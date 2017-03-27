$(document).ready(function() {

    $( "#sortable" ).sortable();

    $(document).on("click", ".mdl-chip__action", function() {
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
                    "</span>";
                $('#sortable').append(itemToInsert);
                break;

            case 'remove':
                link.parent().remove();
                break;
        }
    });


    $('#getOrder').on('click', function () {
        var test = $( "#sortable" ).sortable('toArray');
        console.log(test);
    });



});


