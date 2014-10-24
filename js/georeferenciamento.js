function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
function showPosition(position) {
   $("#latitude").attr('value', position.coords.latitude);
   $("#longitude").attr('value', position.coords.longitude);
}