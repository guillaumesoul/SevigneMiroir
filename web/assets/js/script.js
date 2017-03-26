$(document).ready(function() {
    console.log( "ready!" );

    //permet de faire du drag and drop et de detecter l'ordre des elements
    $( "#sortable" ).sortable();
    $('#getOrder').on('click', function () {
        var test = $( "#sortable" ).sortable('toArray');
        console.log(test);
    });


    //permet de deplacer un element dans la zone qui indique quelles sont les presentations selectionnees pour l'affichage
    $('#drag').draggable();
    $('.ui-state-default').draggable();
    $('#not-drag').draggable();

    $('#drop').droppable({
        accept : '.ui-state-default', // je n'accepte que le bloc ayant "drag" pour id
        drop : function(){
            console.log('element déposé');
        }
    });




    $(".qselected").sortable();
    $(".qselected").disableSelection();

    $(".qitem").draggable({
        containment: "#container",
        revert: 'invalid'
    });

    $(".qselected, #qlist").droppable({
        hoverClass: 'ui-state-highlight',
        drop: function(ev, ui) {
            var $item = ui.draggable.detach();
            var $target = $(ev.target);

            if ($target.find(".qitem").length === 0) {
                console.log("Target is empty, dropping here.");
                $item.attr("style", "");
                $item.appendTo($target);
            } else {
                console.log("Target is full.");
                $(".qselected").each(function(i, el) {
                    if ($(el).find(".qitem").length === 0) {
                        console.log("target " + i + " is empty, dropping here.");
                        $item.attr("style", "");
                        $item.appendTo($(el));
                        return false;
                    }
                });
            }
            /*
             $(".qitem").draggable({
             containment: "#container",
             helper: 'clone',
             revert: 'invalid'
             });
             */
        }
    });




});

/*
*/
