 function initMap() {

    // Create a new StyledMapType object, passing it an array of styles,
    // and the name to be displayed on the map type control.
    var styledMapType = new google.maps.StyledMapType(
        [
          {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [{color: '#c9b2a6'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'geometry.stroke',
            stylers: [{color: '#dcd2be'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ae9e90'}]
          },
          {
            featureType: 'landscape.natural',
            elementType: 'geometry',
            stylers: [{color: '#e2c64b'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#93817c'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [{color: '#a5b076'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#447530'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#f5f1e6'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{color: '#fdfcf8'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#f8c967'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#e9bc62'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry',
            stylers: [{color: '#e98d58'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry.stroke',
            stylers: [{color: '#db8555'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#806b63'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.fill',
            stylers: [{color: '#8f7d77'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#ebe3cd'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [{color: '#7abafc'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#7abafc'}]
          }
        ],
        {name: 'Styled Map'});

    // Create a map object, and include the MapTypeId to add
    // to the map type control.
    // var map = new google.maps.Map(document.getElementById('contact-map'), {
    //   center: {lat: 23.714866, lng: 46.640039},
    //   zoom: 6,
    //   mapTypeControlOptions: {
    //     mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
    //             'styled_map']
    //   }
    // });

    //Associate the styled map with the MapTypeId and set it to display.
    // map.mapTypes.set('styled_map', styledMapType);
    // map.setMapTypeId('styled_map');


    var map = new google.maps.Map(document.getElementById('contact-map'), {
          zoom: 16,
          scrollwheel: false,
          center: new google.maps.LatLng(27.713975, 85.303033),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'http://localhost:7879/assets/images/';
        var icons = {
          place: {
            icon: iconBase + 'ico-marker.png'
          }
        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }

        var features = [
          {
            position: new google.maps.LatLng(23.597006, 44.789866),
            type: 'place'
          }, {
            position: new google.maps.LatLng(25.210421, 55.272043),
            type: 'place'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }
}