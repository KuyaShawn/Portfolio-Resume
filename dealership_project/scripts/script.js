// Initialize and add the map
function initMap() {
    // The location of Uluru
    const setLocation = { lat: 47.315333, lng: -122.178529 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: setLocation,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: setLocation,
        map: map,
    });
}