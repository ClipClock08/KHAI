// GoogleMapsLoader.load(function(google) {
//
//     var myLatLng = {lat: 50.013928, lng: 36.224399};
//     var map = new google.maps.Map(document.getElementById('map'), {
//         center: myLatLng,
//         scrollwheel:false,
//         zoom: 17
//     });
//     var marker = new google.maps.Marker({
//         map: map,
//         position: myLatLng,
//         title: 'ХНЕУ'
//     });
// });

var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 50.0032341, lng: 36.201267},
        scrollwheel:false,
        zoom: 17
    });

    var marker = new google.maps.Marker({
        position: {lat: 50.0032341, lng: 36.201267},
        map: map,
        title: 'ХАИ'
    });
}

$('.keynote__slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3
});
