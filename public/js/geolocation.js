function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.error("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
  const data = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;

  console.info(data);
}