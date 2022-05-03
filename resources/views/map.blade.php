<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <script src="https://cesium.com/downloads/cesiumjs/releases/1.74/Build/Cesium/Cesium.js"></script>
  <link href="https://cesium.com/downloads/cesiumjs/releases/1.74/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
</head>
<body style="margin: 0;">
  <div id="cesiumContainer" style="width: 100%; height: 100%;"></div>

  <input id="X" type="text">
  <input id="Y" type="text">
  <input id="Z" type="text">
  <button onclick="flyToXYZ();">Fly to X/Y/Z</button>

  <input id="gardenName" type="text">
  <button onclick="loadGarden();">Load Garden</button>
  

  <script>
    Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiIyOWNlNDNhNS0yODVhLTQ1MmEtYjA3OC1jYzExNWFkNTk2ZGUiLCJpZCI6MzYxNjUsImlhdCI6MTYwMzEwNzg3MX0.nkHurIt3yvgCpquPWQs2TxbthuzZPacnYbKY7R6-94E';

    var viewer = new Cesium.Viewer('cesiumContainer', {
        animation: false,
        baseLayerPicker: false,
        fullscreenButton: false,
        geocoder: false,
        homeButton: false,
        sceneModePicker: false,
        navigationHelpButton: false,
        timeline: false,
    });

    var x, y;

    function flyToXYZ() {
        x = parseFloat(document.getElementById("X").value);
        y = parseFloat(document.getElementById("Y").value);
        z = parseFloat(document.getElementById("Z").value);

        viewer.camera.flyTo({
            destination: Cesium.Cartesian3.fromDegrees(x, y, z), 
        });
    }

    function loadGarden () {
        gardenName = document.getElementById("gardenName").value;

        // AJAX API call to get data from DB via PHP
        fetch('https://happilygardening.com/getGarden.php?gardenName=' + gardenName)
            .then(response => response.json())
            .then(data => {
                latitude   = data.latitude;
                longitude  = data.longitude;
                zoom       = data.zoom;
    
                document.getElementById("X").value = longitude;
                document.getElementById("Y").value = latitude;
                document.getElementById("Z").value = zoom;

                flyToXYZ(longitude, latitude, zoom);
            });
    }

    function hide() {
        document.getElementById("cesiumContainer").style.display = "none";
    }

    function show() {
        document.getElementById("cesiumContainer").style.display = "block";
    }

  </script>
</body>
</html>