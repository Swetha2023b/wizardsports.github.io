<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Location-based Button</title>
</head>
<body>
  <h1>Location-based Button</h1>
  <p>Click the button to do something.</p>
  <button id="my-button" disabled>Do Something</button>

  <script>
    function isWithinLocation(latitude, longitude) {
      // Define the latitude and longitude of the target location
      const targetLatitude = 9.5260093;
      const targetLongitude = 76.8144186;

      // Calculate the distance between the user's location and the target location using the haversine formula
      const earthRadius = 6371; // Radius of the earth in kilometers
      const dLat = (latitude - targetLatitude) * Math.PI / 180;
      const dLon = (longitude - targetLongitude) * Math.PI / 180;
      const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(targetLatitude * Math.PI / 180) * Math.cos(latitude * Math.PI / 180) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      const distance = earthRadius * c;

      // If the distance is less than 1 kilometer, return true
      return distance < 1;
    }

    const button = document.querySelector('#my-button');

    navigator.geolocation.watchPosition((position) => {
      const isEnabled = isWithinLocation(position.coords.latitude, position.coords.longitude);
      button.disabled = !isEnabled;
    }, (error) => {
      console.error(error);
      alert('Unable to determine your location. Please allow location access and refresh the page.');
    }, {
      enableHighAccuracy: true,
      timeout: 5000,
      maximumAge: 0
    });
  </script>
</body>
</html>
