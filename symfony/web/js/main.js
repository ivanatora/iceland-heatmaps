$(document).ready(function () {


    var baseLayer = L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }
    );

    var cfg = {
        // radius should be small ONLY if scaleRadius is true (or small radius is intended)
        "radius": 2,
        "maxOpacity": .8,
        // scales the radius based on map zoom
        "scaleRadius": true,
        // if set to false the heatmap uses the global maximum for colorization
        // if activated: uses the data maximum within the current map boundaries
        //   (there will always be a red spot with useLocalExtremas true)
        "useLocalExtrema": false,
        // which field name in your data represents the latitude - default "lat"
        latField: 'lat',
        // which field name in your data represents the longitude - default "lng"
        lngField: 'lng',
        // which field name in your data represents the data value - default "value"
        valueField: 'count'
    };


    var heatmapLayer = new HeatmapOverlay(cfg);

    var map = new L.Map('map', {
        center: new L.LatLng(65.261, -17.952),
        zoom: 7,
        layers: [baseLayer, heatmapLayer]
    });

    var idx = 0;
    // heatmapLayer.setData(data[0]);
    var timer = setInterval(function(){
        heatmapLayer.setData(data[idx]);
        $('h2').html(data[idx].for_date);
        console.log(data[idx].for_date);
        idx++;
        if (idx >= data.length) {
            clearInterval(timer);
        }
    }, 300)

    // make accessible for debugging
    layer = heatmapLayer;
})