window.onload = start;

function start() {
    mapboxgl.accessToken = 'pk.eyJ1IjoidmluY2VudG5vcmRlbWFuIiwiYSI6ImNqcGpvZDFmYTA4Ym0zcHFkMTQ0ZGtxM3YifQ.h6k8Y7CGTDvNoGwEKwNUyA';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/vincentnordeman/cjpjoquzz0f2u2rs3zkr6zlyx', // stylesheet location
        center: [18.07, 59.33], // starting position [lng, lat]
        zoom: 10 // starting zoom
    });

    var marker = new mapboxgl.Marker()
        .setLngLat([18.1, 59.33])
        .addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        alert("FEL");
    }

    function showLocation() {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        alert("Din position är: " + lat + ", " + lon);
    }
}