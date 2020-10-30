function iniciarMap(){
    var coord = {lat:5.7912889 ,lng: -75.4267816};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}