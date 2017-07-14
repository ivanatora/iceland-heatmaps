$(document).ready(function () {
    /*  start legend code */
// we want to display the gradient, so we have to draw it
    var legendCanvas = document.createElement('canvas');
    legendCanvas.width = 100;
    legendCanvas.height = 10;
    var min = document.querySelector('#min');
    var max = document.querySelector('#max');
    var gradientImg = document.querySelector('#gradient');
    var legendCtx = legendCanvas.getContext('2d');
    var gradientCfg = {};

    function updateLegend(data) {
        // the onExtremaChange callback gives us min, max, and the gradientConfig
        // so we can update the legend
        min.innerHTML = data.min;
        max.innerHTML = data.max;
        // regenerate gradient image
        if (data.gradient != gradientCfg) {
            gradientCfg = data.gradient;
            var gradient = legendCtx.createLinearGradient(0, 0, 100, 1);
            for (var key in gradientCfg) {
                gradient.addColorStop(key, gradientCfg[key]);
            }
            legendCtx.fillStyle = gradient;
            legendCtx.fillRect(0, 0, 100, 10);
            gradientImg.src = legendCanvas.toDataURL();
        }
    };
    /* legend code end */

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
        valueField: 'count',
        // onExtremaChange will be called whenever there's a new maximum or minimum
        onExtremaChange: function(data) {
            updateLegend(data);
        }
    };


    var heatmapLayer = new HeatmapOverlay(cfg);

    var map = new L.Map('map', {
        center: new L.LatLng(64.561, -17.952),
        zoom: 7,
        layers: [baseLayer, heatmapLayer]
    });

    var idx = 0;
    // heatmapLayer.setData(data[0]);
    var timer = setInterval(function(){
        heatmapLayer.setData(data[idx]);
        $('h1').html('Traffic data: ' + data[idx].for_date);
        idx++;
        $('#slider').slider('value', data[idx].min_number);

        if (idx >= data.length) {
            clearInterval(timer);
        }
    }, 300)

    // make accessible for debugging
    layer = heatmapLayer;

    // slider
    $('#slider').slider({
        min: 0,
        max: 1440
    });
})