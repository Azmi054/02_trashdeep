<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <title>Input Lokasi</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <style>
      body { margin: 0; padding: 0; }
      #map { position: absolute; top: 0; bottom: 0; width: 100%; }
      .form-group { padding: 10px; }
    </style>
  </head>
  <body>
    <div class="form-group">
      <label for="location">Lokasi</label>
      <input type="text" class="form-control" id="location" name="location" placeholder="Klik pada peta untuk menambahkan lokasi" readonly>
      <input type="hidden" id="latitude" name="latitude">
      <input type="hidden" id="longitude" name="longitude">
    </div>

    <div id="map"></div>

    <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiYXptaTU0IiwiYSI6ImNsaGxqZ2JjaDBud2ozZm9wcGlkNHowMGoifQ.nrXjNlEecvnIlZaBJVkwuw';
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [107.616, -6.918],
        zoom: 12
      });

      var marker = new mapboxgl.Marker({
        draggable: true
      })
        .setLngLat([107.616, -6.918])
        .addTo(map);

      function onDragEnd() {
        var lngLat = marker.getLngLat();
        var locationInput = document.getElementById('location');
        var latitudeInput = document.getElementById('latitude');
        var longitudeInput = document.getElementById('longitude');
        locationInput.value = lngLat.lng + ', ' + lngLat.lat;
        latitudeInput.value = lngLat.lat;
        longitudeInput.value = lngLat.lng;
      }

      function onClickMap(e) {
        var locationInput = document.getElementById('location');
        var latitudeInput = document.getElementById('latitude');
        var longitudeInput = document.getElementById('longitude');

        marker.setLngLat(e.lngLat).addTo(map);
        locationInput.value = e.lngLat.lng + ', ' + e.lngLat.lat;
        latitudeInput.value = e.lngLat.lat;
        longitudeInput.value = e.lngLat.lng;
      }

      marker.on('dragend', onDragEnd);
      map.on('click', onClickMap);
    </script>
  </body>
</html>
