$(document).ready(function() {
    console.log( "ready!" );

    $( "#sortable" ).sortable();
    $('#getOrder').on('click', function () {
        var test = $( "#sortable" ).sortable('toArray');
        console.log(test);
    })


});

/*
*/
