$( function() {
    var availableTags = [
      "Castellón",
      "Valencia",
      "Alicante",
      "Tarragona",
      "Barcelona",
      "Lleida",
      "Girona",
      "Teruel",
      "Zaragoza",
      "Huesca",
      "Guadalajara",
      "Albacete",
      "Toledo",
      "Cuenca",
      "Ciudad Real",
      "Murcia"
    ];
    $( "#mensaje_ciudad" ).autocomplete({
      source: availableTags
    });
  } );