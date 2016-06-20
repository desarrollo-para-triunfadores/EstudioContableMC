window.onload = function() {
    var mapDiv = document.getElementById('map');
    var resistencia = new google.maps.LatLng(-27.4606439,-59.0653856);
    var options = {
        center: resistencia,
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var mapa = new google.maps.Map(mapDiv, options);
}