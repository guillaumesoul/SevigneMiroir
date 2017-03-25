$(document).ready(function() {
    console.log( "ready!" );

    var sortable = $( "#sortable" ).sortable();
    //$( "#sortable" ).disableSelection();

    //var sorted = $( ".selector" ).sortable( "serialize", { key: "sort" } );
    $('#getOrder').on('click', function () {
        console.log('get order');
        var test = $( "#sortable" ).sortable('toArray');
        console.log(test);
    })


});

/*
*/
