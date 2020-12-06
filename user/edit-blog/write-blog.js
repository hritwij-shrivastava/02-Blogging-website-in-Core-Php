$(function() {

    $("#input-h").focusin(function() {
        $( "#title-h" ).addClass( "newone" );
    }).focusout(function () {
        $( "#title-h" ).removeClass( "newone" );
    });
});