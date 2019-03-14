window.onload = start;

function start() {

    /* Lägg till position själv */
    var lat = 59.316735;
    var lon = 17.998856;

    mapboxgl.accessToken = 'pk.eyJ1IjoidmluY2VudG5vcmRlbWFuIiwiYSI6ImNqcGpvZDFmYTA4Ym0zcHFkMTQ0ZGtxM3YifQ.h6k8Y7CGTDvNoGwEKwNUyA';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/vincentnordeman/cjpjoquzz0f2u2rs3zkr6zlyx', // stylesheet location
        center: [lon, lat], // starting position [lng, lat]
        zoom: 15 // starting zoom
    });

    /* Skapa en special marker ikon för hem */
    var hem = document.createElement("div");
    hem.className = "marker";
    var marker = new mapboxgl.Marker(hem)
        .setLngLat([lon, lat])
        .addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        alert("FEL");
    }

    function showLocation(position) {
        /*  var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        console.log("Din position är: " + lat + ", " + lon); */

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
            var stops = JSON.parse(this.responseText);

            stops.forEach(stop => {
                console.log("Hållplats: ", stop[0], stop[1], [2]);

                /* Skapa en popup */
                var popup = new mapboxgl.Popup({
                        offset: 25
                    })
                    .setText(stop[0]);

                var marker = new mapboxgl.Marker()
                    .setLngLat([stop[2], stop[1]])
                    .setPopup(popup)
                    .addTo(map);
            });
        }
    }
}