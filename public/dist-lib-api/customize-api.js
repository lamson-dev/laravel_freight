
var startLat = 15.9323;
var startLng = 108.2291;

var endLat = 15.9323;
var endLng = 108.2291;

var map = L.map('map').setView([startLat, startLng], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYWtsc2RqZmtsaiIsImEiOiJjanZ5bTI3NzkwN3VkNDRxbXR2dnpiZzV4In0.WGc8JKHrtovfnYu7vvdvTA'
}).addTo(map);


//              marker for startPoint
var myMarker = L.marker([startLat, startLng], {
    title: "Start",
    alt: "Coordinates",
    draggable: true
}).addTo(map).on('dragend', function () {
    var lat = myMarker.getLatLng().lat.toFixed(8);
    var lng = myMarker.getLatLng().lng.toFixed(8);

   
    myMarker.bindPopup("Kinh độ: " + lat + " <br/> Vĩ độ: " + lng).openPopup();

//              calculata distace
    startLat = lat;
    startLng = lng;

//                get Name Addr
    getStartAddrName(lat, lng);
    calculateDistanceStartEnd();


});

//              marker for endPoint
var myMarker2 = L.marker([startLat, startLng], {
    title: "End",
    alt: "Coordinates",
    draggable: true
}).addTo(map).on('dragend', function () {
    var lat = myMarker2.getLatLng().lat.toFixed(8);
    var lng = myMarker2.getLatLng().lng.toFixed(8);

   
    myMarker2.bindPopup("Kinh độ: " + lat + " <br/> Vĩ độ: " + lng).openPopup();

//              calculata distace
    endLat = lat;
    endLng = lng;

//              get Name Addr
    getEndAddrName(lat, lng);
    calculateDistanceStartEnd();
});


function getEndAddrName(Lat, Lng) {
    var xmlhttp = new XMLHttpRequest();

    var url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + Lat + "&lon=" + Lng;

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var addArr = JSON.parse(this.responseText);
            document.getElementById("add_end").value = addArr.display_name;
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function getStartAddrName(Lat, Lng) {
    var xmlhttp = new XMLHttpRequest();

    var url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + Lat + "&lon=" + Lng;

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var addArr = JSON.parse(this.responseText);
            document.getElementById("add_start").value = addArr.display_name;
        }
    };

    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


//              for start address
function chooseStartAddr(lat_t, lng_t) {
    myMarker.closePopup();
    map.setView([lat_t, lng_t], 18);
    myMarker.setLatLng([lat_t, lng_t]);
    var lat_1 = lat_t.toFixed(8);
    var lng_1 = lng_t.toFixed(8);
   
    getStartAddrName(lat_1, lng_1);
    myMarker.bindPopup().openPopup("Kinh độ: " + lat_1 + " <br/> Vĩ độ: " + lng_1);
    startLat = lat_1;
    startLng = lng_t;


}

function showStartResult(arr) {
    var out = "<br/>";
    var i;

//                clean last results
    document.getElementById("results").innerHTML = "";
   
    if (arr.length > 0) {
        for (i = 0; i < arr.length; i++) {
            out += "<div class='address' title='Start-Show Location and Coordinates' onclick='chooseStartAddr(" + arr[i].lat + ", " + arr[i].lon + "); return false;'>" + arr[i].display_name + "</div>";
        }
        document.getElementById("results").innerHTML = out;
    } else {
        document.getElementById("results").innerHTML = "Not found this address";
    }


}

function searchStartAddr(value) {

    var xmlhttp = new XMLHttpRequest();

    var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + value;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var addArr = JSON.parse(this.responseText);
            showStartResult(addArr);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

//              for end address
function chooseEndAddr(lat_t, lng_t) {
    myMarker2.closePopup();
    map.setView([lat_t, lng_t], 18);
    myMarker2.setLatLng([lat_t, lng_t]);
    var lat_1 = lat_t.toFixed(8);
    var lng_1 = lng_t.toFixed(8);
   
    getEndAddrName(lat_1, lng_1);
    myMarker2.bindPopup().openPopup("Kinh độ: " + lat_1 + " <br/> Vĩ độ: " + lng_1);

    endLat = lat_1;
    endLng = lng_t;



    // document.getElementById("addrEnd").innerHTML = getNameAddr(lat_t, lng_t);

}

function showEndResult(arr) {
    var out = "<br/>";
    var i;


//                clean last results
    document.getElementById("results").innerHTML = "";


    if (arr.length > 0) {
        for (i = 0; i < arr.length; i++) {
            out += "<div class='address' title='End-Show Location and Coordinates' onclick='chooseEndAddr(" + arr[i].lat + ", " + arr[i].lon + "); return false;'>" + arr[i].display_name + "</div>";
        }
        document.getElementById("results").innerHTML = out;
    } else {
        document.getElementById("results").innerHTML = "Not found this address";
    }


}

function searchEndAddr(value) {

    var xmlhttp = new XMLHttpRequest();

    var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + value;
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var addArr = JSON.parse(this.responseText);
            showEndResult(addArr);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}



//          Caculate distance between 2 points
var routeControl = L.Routing.control(
        {
            waypoints: [
                null
            ]
        }
).addTo(map);

function calculateDistanceStartEnd() {

    // alert(s_lat + "-" + s_lng + "-" + e_lat + "-" + e_lng);

    var s_lat = myMarker.getLatLng().lat;
    var s_lng = myMarker.getLatLng().lng;

    var e_lat = myMarker2.getLatLng().lat;
    var e_lng = myMarker2.getLatLng().lng;
    routeControl.setWaypoints([
        L.latLng(s_lat, s_lng),
        L.latLng(e_lat, e_lng)
    ]);
    routeControl.on('routesfound', function (e) {

        var routes = e.routes;
        var summary = routes[0].summary;
        document.getElementById("kilomet").value = summary.totalDistance / 1000;
    });

    routeControl.hide();
}
