function initialize() {
    var mapOptions = {
        zoom: 8,
        scrollwheel: false,
        center: new google.maps.LatLng(40.76383,-73.97295)
    };
    var map = new google.maps.Map(document.getElementById('googleMap'),
          mapOptions);
    var marker = new google.maps.Marker({
        icon: 'images/map-marker.png',
        animation:google.maps.Animation.BOUNCE,
        position: map.getCenter(),
        map: map
    });
    var styles = [
    {
        "featureType": "landscape",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "stylers": [
            {
                "hue": "#00aaff"
            },
            {
                "saturation": -100
            },
            {
                "gamma": 2.15
            },
            {
                "lightness": 12
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 24
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#111111"
            },
            {
                "lightness": 87
            }
        ]
    }
]

    map.setOptions({styles: styles});
}
google.maps.event.addDomListener(window, 'load', initialize);	
