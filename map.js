Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiIyOWNlNDNhNS0yODVhLTQ1MmEtYjA3OC1jYzExNWFkNTk2ZGUiLCJpZCI6MzYxNjUsImlhdCI6MTYwMzEwNzg3MX0.nkHurIt3yvgCpquPWQs2TxbthuzZPacnYbKY7R6-94E';

var viewer = new Cesium.Viewer('cesiumMap', {
  animation: false,
  baseLayerPicker: false,
  fullscreenButton: false,
  geocoder: false,
  homeButton: false,
  sceneModePicker: false,
  navigationHelpButton: false,
  timeline: false,
});

function mapZoomOut() {
  viewer.camera.flyTo({
    destination: Cesium.Cartesian3.fromDegrees(oldLongitude, oldLatitude, 30000000),
    duration:    3,
// 'complete' triggers too soon so using setTimeOut instead
//    complete:    mapTravel()
  });

  setTimeout(mapTravel, 3000);
}

function mapTravel () {
  viewer.camera.flyTo({
    destination: Cesium.Cartesian3.fromDegrees(newLongitude, newLatitude, 30000000),
    duration:    3,
//    complete:    mapZoomIn()
  });

  setTimeout(mapZoomIn, 5000);
}

function mapZoomIn () {
  viewer.camera.flyTo({
    destination: Cesium.Cartesian3.fromDegrees(newLongitude, newLatitude, 1000)
  });
}

