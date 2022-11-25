//Muestra una ubicacion en el mapa al abrir la aplicacion
var myLatLng = { lat: 19.04355623822875, lng: -98.19816036050274 };
var mapOptions = {
    center: myLatLng,
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//Crear mapa
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();
directionsDisplay.setMap(map);


//Funcion para calcular la ruta
function calcRoute() {
    //devuelve la respuesta del tipo de viaje y detalles
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.TRANSIT, 
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Distancia y tiempo que obtiene
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'>Origen: " + document.getElementById("from").value + ".<br />Destino: " + document.getElementById("to").value + ".<br /> Distancia <i class='fas fa-road'></i> : " + result.routes[0].legs[0].distance.text + ".<br />Tiempo <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";
            directionsDisplay.setDirections(result);
        } else {
            directionsDisplay.setDirections({ routes: [] });
            map.setCenter(myLatLng);

            //Mensaje de error si no encuentra una ruta
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> No hay forma de llegar :(</div>";
        }
    });

}

//variables para autompletar los input
var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2);