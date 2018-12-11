window.onload = start;

function start() {
    const eListaKoordinater = document.querySelector(".coordinates");
    const eListaBeskrivning = document.querySelector(".beskrivning");
    const eBox = document.querySelector(".box");
    const eKnapp = document.querySelector("button");
    const url = "spara.php";

    mapboxgl.accessToken = 'pk.eyJ1IjoidmluY2VudG5vcmRlbWFuIiwiYSI6ImNqcGpvZDFmYTA4Ym0zcHFkMTQ0ZGtxM3YifQ.h6k8Y7CGTDvNoGwEKwNUyA';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/vincentnordeman/cjpjoquzz0f2u2rs3zkr6zlyx', // stylesheet location
        center: [18.07, 59.33], // starting position [lng, lat]
        zoom: 10 // starting zoom
    });

    map.on("click", addMarker);

    function addMarker(e) {
        let marker = new mapboxgl.Marker()
            .setLngLat(e.lngLat)
            .addTo(map);

        console.log(e.lngLat);

        /* Lägg till en ny rad i tabellen för varje click */
        eListaKoordinater.textContent += e.lngLat.lng.toFixed(4) + "," + e.lngLat.lat.toFixed(4) + ",\n";
        eListaBeskrivning.textContent += "Plats:" + "\n";
    }

    /* Vid klick på Spara-knappen skicka data till PHP-skript */
    eKnapp.addEventListener("click", spara);

    function spara() {
        /* Skicka ajax-anrop till webbtjänsten */
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaPlatser);
        function sparaPlatser() {
            console.log(this.responseText);
        }
        ajax.open("POST", url, true);

        //Läs av formulärets inehåll// 
        let formData = new FormData();
        formData.append("coordinates", eListaKoordinater.value);
        formData.append("beskrivning", eListaBeskrivning.value);

        /* Nu, skicka data */
        ajax.send(formData);
    }
}