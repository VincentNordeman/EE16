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

    function showLocation(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        console.log("Din position är: " + lat + ", " + lon);

        /* Lägg till position själv */
        lat = 59.316735;
        lon = 17.998856;

        /* Omvadla data till post-data */
        var postData = new FormData();
        postData.append("lat", lat);
        postData.append("lon", lon);

        /* Skicka data till ett php script */
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "hallplatser.php", true);
        ajax.send(postData);

        ajax.addEventListener("loadend", visaStop);

        function visaStop() {
            var stopJson = this.responseText
            console.log(stopJson);

            var stops = JSON.parse(stopsJson);

            stops.forEach(stop => {
                console.log("Hållplats: ", stop[0], stop[1], [2]);

                var marker = new mapboxgl.Marker()
                    .setLngLat([stop[1], stop[2]])
                    .addTo(map);
            });
        }
    }
}