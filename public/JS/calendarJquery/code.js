$( function() {
    $( "#cita_fecha" ).datepicker();
    $( "#anim" ).on( "change", function() {
      $( "#cita_fecha" ).datepicker( "option", "showAnim", $( this ).val() );
    });
  } );