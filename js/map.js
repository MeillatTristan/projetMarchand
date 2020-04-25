var map;

function initMap(){
  map = new google.maps.Map(document.getElementById('map'),{
    center : {
      lat: 47.469496,
      lng: -0.564244
    },
    zoom: 8
  });
}