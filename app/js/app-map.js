jQuery(function($) {

  var maps = [],
    ibSize = (winW < 768) ? 300 : 360,
    mapStyles = [{
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "saturation": "63"
          },
          {
            "color": "#c1d8f1"
          }
        ]
      },
      {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [{
          "saturation": "0"
        }]
      },
      {
        "featureType": "landscape.natural.landcover",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "saturation": "16"
          }
        ]
      },
      {
        "featureType": "landscape.natural.terrain",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "hue": "#ff0000"
          }
        ]
      },
      {
        "featureType": "landscape.natural.terrain",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#e42828"
          },
          {
            "visibility": "on"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "featureType": "poi.attraction",
        "elementType": "all",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.attraction",
        "elementType": "geometry",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.attraction",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#a4e190"
          },
          {
            "saturation": "3"
          },
          {
            "lightness": "-6"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#131212"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#c1d8f1"
          },
          {
            "lightness": "67"
          },
          {
            "saturation": "11"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#c1d8f1"
          },
          {
            "saturation": "0"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#c1d8f1"
          },
          {
            "saturation": "-71"
          },
          {
            "lightness": "83"
          },
          {
            "gamma": "3.06"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#5f5e5e"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "simplified"
          },
          {
            "color": "#c1d8f1"
          },
          {
            "saturation": "-71"
          },
          {
            "lightness": "83"
          },
          {
            "gamma": "3.06"
          },
          {
            "weight": "1"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "saturation": "-14"
          },
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#4c4c4c"
          },
          {
            "saturation": "0"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#4c4c4c"
          },
          {
            "saturation": "0"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "all",
        "stylers": [{
          "visibility": "on"
        }]
      },
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [{
            "visibility": "on"
          },
          {
            "color": "#84a8d2"
          },
          {
            "saturation": "0"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{
            "lightness": "100"
          },
          {
            "saturation": "-56"
          }
        ]
      }
    ],
    ibOptions = {
      alignBottom: true,
      content: 'text',
      pixelOffset: (winW < 768) ? new google.maps.Size(ibSize / -2, ibSize / 1.25) : new google.maps.Size(ibSize / -2, ibSize / 1.25),
      boxStyle: {
        width: ibSize + 'px'
      },
      closeBoxMargin: "0",
      closeBoxURL: 'img/icon-close.png'
    },

    ib = new InfoBox(ibOptions),
    mapDefaultCenter,
    mapDefaultZoom,
    markersArr = [];

  function Map(id, mapOptions) {
    this.map = new google.maps.Map(document.getElementById(id), mapOptions);
    this.markers = [];
    this.infowindows = [];
    this.clusters = null;
  }

  function addMarker(mapId, location, index, string, image, city) {
    maps[mapId].markers[index] = new google.maps.Marker({
      position: location,
      map: maps[mapId].map,
      icon: {
        url: image
      },
      mainImage: image,
      desc: string,
      region: city
    });

    var content = string;

    google.maps.event.addListener(maps[mapId].markers[index], 'click', function() {
      ib.setContent(content);
      ib.setPosition(location);
      ib.open(maps[mapId].map);

      maps[mapId].map.setCenter(location);

      if ($('.map').length) {
        if (winW < 768) {
          maps[mapId].map.panBy(0, -ibSize);
        } else {
          maps[mapId].map.panBy(0, ibSize / 2);
        }
      }
    });
    return maps[mapId].markers[index];
  }

  function initialize(mapInst) {

    var lat = mapInst.attr("data-lat"),
      lng = mapInst.attr("data-lng"),
      myLatlng = new google.maps.LatLng(lat, lng),
      setZoom = winW < 768 ? parseInt(mapInst.attr("data-xs-zoom")) : parseInt(mapInst.attr("data-zoom")),
      mapId = mapInst.attr('id'),
      clusterImg = mapInst.attr("data-cluster-img");


    // set default zoom if user not set
    mapDefaultCenter = myLatlng;


    // set default zoom if user not set
    if (winW < 768) {
      if (!mapInst.attr("data-xs-zoom") == '') {
        mapDefaultZoom = setZoom;
      } else {
        mapDefaultZoom = 10;
      }
    } else {
      if (!mapInst.attr("data-zoom") == '') {
        mapDefaultZoom = setZoom;
      } else {
        mapDefaultZoom = 12;
      }
    }


    // option interface map
    var mapOptions = {
      zoom: mapDefaultZoom,
      disableDefaultUI: true,
      scrollwheel: false,
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL,
        position: google.maps.ControlPosition.RIGHT_BOTTOM
      },
      streetViewControl: false,
      fullscreenControl: false,
      center: myLatlng,
      styles: mapStyles
    };


    if ($('.contact-block').length) {
      let mapDataLink = $('.contact-block').attr('data-map-json');

      $.ajax({
        url: mapDataLink,
        type: 'get',
        dataType: 'json',
        error: function(data) {
          console.log("File Not Found");
        },
        success: function(data) {

          console.log(data)


          for (let locations in data) {
            for (let i = 0; i < data[locations].length; i++) {
              let address = data[locations][i].town,

                phone = data[locations][i].phone,
                phoneLink = data[locations][i].phoneLink,
                email = data[locations][i].email,
                imgMarker = winW < 768 ? data[locations][i].dataImgMobile : data[locations][i].dataImg;

              let markerInst;

              let string = '<div class="info-box-wrapper">' +
                '             <div class="btn-close"></div>' +
                '             <div class="info-box-inner">' +
                '               <div class="contact-item">' +
                '                 <div class="contact-img"><img src="img/icons/icon-pin.svg" alt="" loading="lazy"></div>' +
                '                 <div class="contact-info"><div>' + address + '</div></div>' +
                '               </div>' +
                '               <div class="contact-item">' +
                '                 <div class="contact-img"><img src="img/icons/i-contact-2.svg" alt="" loading="lazy"></div>' +
                '                 <div class="contact-info"><a href="tel:' + phoneLink + '">' + phone + '</a></div>' +
                '               </div>' +
                '               <div class="contact-item">' +
                '                 <div class="contact-img"><img src="img/icons/i-contact-3.svg" alt="" loading="lazy"></div>' +
                '                 <div class="contact-info"><a href="mailto:' + email + '">' + email + '</a></div>' +
                '               </div>' +
                '               <div class="contact-item">' +
                '                 <div class="contact-img"><img src="img/icons/i-contact-4.svg" alt="" loading="lazy"></div>' +
                '                 <div class="contact-info"><div>' + workDays_1 + '</div><div>' + workDays_2 + '</div></div>' +
                '               </div>' +
                '             </div>' +

                '           </div>'


              markerInst = addMarker(
                data[locations][i].dataRel,
                new google.maps.LatLng(
                  data[locations][i].dataLat,
                  data[locations][i].dataLng
                ),
                i,
                string,
                imgMarker,
                data[locations][i].dataCity,
                locations
              );
              markersArr.push(markerInst);
            }
          }


          maps[mapId].markerClusterer = new MarkerClusterer(maps[mapId].map, markersArr, clusterOptions);


          maps[mapId].markers.forEach(function(marker, index) {
            maps[mapId].bounds.extend(marker.getPosition());
          });


          if (!lat == '' && !lng == '') {
            // maps[mapId].bounds.setPosition(marker.getPosition());
            // maps[mapId].bounds.fitBounds();
          } else {
            maps[mapId].map.fitBounds(maps[mapId].bounds);
          }

        }
      });
    }


    maps[mapId] = new Map(mapId, mapOptions);
    maps[mapId].bounds = new google.maps.LatLngBounds();


    // Close info-box on click on map
    maps[mapId].map.addListener('click', function() {
      ib.close();
    });
  }

  $('.map').each(function() {
    initialize($(this));
  });

});