jQuery(function($) {

  var maps = [],
    ibSize = ($(window).width() < 768) ? 300 : 460,
    mapStyles = [{
      "featureType": "administrative.locality",
      "elementType": "all",
      "stylers": [{
        "hue": "#2c2e33"
      }, {
        "saturation": 7
      }, {
        "lightness": 19
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [{
        "hue": "#ffffff"
      }, {
        "saturation": -100
      }, {
        "lightness": 100
      }, {
        "visibility": "simplified"
      }]
    }, {
      "featureType": "poi",
      "elementType": "all",
      "stylers": [{
        "hue": "#ffffff"
      }, {
        "saturation": -100
      }, {
        "lightness": 100
      }, {
        "visibility": "off"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [{
        "hue": "#bbc0c4"
      }, {
        "saturation": -93
      }, {
        "lightness": 31
      }, {
        "visibility": "simplified"
      }]
    }, {
      "featureType": "road",
      "elementType": "labels",
      "stylers": [{
        "hue": "#bbc0c4"
      }, {
        "saturation": -93
      }, {
        "lightness": 31
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "labels",
      "stylers": [{
        "hue": "#bbc0c4"
      }, {
        "saturation": -93
      }, {
        "lightness": -2
      }, {
        "visibility": "simplified"
      }]
    }, {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [{
        "hue": "#e9ebed"
      }, {
        "saturation": -90
      }, {
        "lightness": -8
      }, {
        "visibility": "simplified"
      }]
    }, {
      "featureType": "transit",
      "elementType": "all",
      "stylers": [{
        "hue": "#e9ebed"
      }, {
        "saturation": 10
      }, {
        "lightness": 69
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "water",
      "elementType": "all",
      "stylers": [{
        "hue": "#e9ebed"
      }, {
        "saturation": -78
      }, {
        "lightness": 67
      }, {
        "visibility": "simplified"
      }]
    }],
    ibOptions = {
      alignBottom: true,
      content: 'text',
      pixelOffset: ($(window).width() < 768) ? new google.maps.Size(-150, -55) : new google.maps.Size(40, ibSize / 1.5),
      boxStyle: {
        width: ibSize + 'px'
      },
      closeBoxMargin: "0",
      closeBoxURL: 'img/icon-close.png'
    },

    ib = new InfoBox(ibOptions),
    directionsDisplayObj = {},
    mapDefaulCenter,
    mapDefaulZoom,
    markersArr = [];

  function Map(id, mapOptions) {
    this.map = new google.maps.Map(document.getElementById(id), mapOptions);
    this.markers = [];
    this.infowindows = [];
    this.clusters = null;
  }

  function addMarker(mapId, location, index, string, image, activeImage, province) {
    maps[mapId].markers[index] = new google.maps.Marker({
      position: location,
      map: maps[mapId].map,
      icon: {
        url: image
      },
      mainImage: image,
      activeIcon: activeImage,
      active: false,
      desc: string,
      region: province
    });

    var content = '<div class="info-box-wrapper">' + string + '</div>';

    google.maps.event.addListener(maps[mapId].markers[index], 'click', function() {
      ib.setContent(content);
      ib.setPosition(location);
      ib.open(maps[mapId].map);

      maps[mapId].markers.forEach(function(marker) {
        marker.active = false;
        marker.setIcon(marker.mainImage);
      });

      maps[mapId].map.setCenter(location);
      this.setIcon(this.activeIcon);
      this.active = false;


      if ($('.map').length) {
        if (winW < 767) {
          maps[mapId].map.panBy(0, -ibSize / 2);
        } else {
          maps[mapId].map.panBy(ibSize / 2, 0);
        }
      }
    });
    return maps[mapId].markers[index];
  }

  function initialize(mapInst) {

    var lat = mapInst.attr("data-lat"),
      lng = mapInst.attr("data-lng"),
      myLatlng = new google.maps.LatLng(lat, lng),
      setZoom = winW < 767 ? parseInt(mapInst.attr("data-xs-zoom")) : parseInt(mapInst.attr("data-zoom")),
      mapId = mapInst.attr('id'),
      clusterImg = mapInst.attr("data-cluster-img");


    mapDefaulCenter = myLatlng;

    if (winW < 767) {
      if (!mapInst.attr("data-xs-zoom") == '') {
        mapDefaulZoom = setZoom;
      } else {
        mapDefaulZoom = 10;
      }
    } else {
      if (!mapInst.attr("data-zoom") == '') {
        mapDefaulZoom = setZoom;
      } else {
        mapDefaulZoom = 12;
      }
    }

    var mapOptions = {
      zoom: mapDefaulZoom,
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


    var clusterOptions = {
      gridSize: 64,
      ignoreHiddenMarkers: true,
      styles: [{
        textColor: '#fff',
        url: clusterImg,
        height: 46,
        width: 38,
        textSize: 14,
        textColor: '#fff',
      }]
    };

    if ($('.contact-block').length) {
      let mapDataLink = $('.contact-block').attr('data-link');

      $.ajax({
        url: mapDataLink,
        type: 'get',
        dataType: 'json',
        error: function(data) {
          console.log("File Not Found");
        },
        success: function(data) {

          for (let province in data) {
            for (let i = 0; i < data[province].length; i++) {
              var markerInst;
              markerInst = addMarker(
                data[province][i].dataRel,
                new google.maps.LatLng(
                  data[province][i].dataLat,
                  data[province][i].dataLng
                ),
                i,
                data[province][i].dataString,
                data[province][i].dataImg,
                data[province][i].dataImgActive,
                data[province][i].dataProvince,
                province
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

    ib.addListener('closeclick', function() {
      maps[mapId].markers.forEach(function(marker) {
        marker.active = false;
        marker.setIcon(marker.mainImage);
      });
    });

    //change province
    $('#setprovince').on('change', function() {
      ib.close();
      let newProvince = $(this).val();
      if (newProvince == '') {
        maps[mapId].map.fitBounds(maps[mapId].bounds);
      } else {
        for (let i = 0; i < markersArr.length; i++) {
          if (markersArr[i].region == newProvince) {
            maps[mapId].map.setZoom(9);
            maps[mapId].map.setCenter(markersArr[i].getPosition());
          }
        }
      }
    });

    //click on map
    maps[mapId].map.addListener('click', function() {
      ib.close();
    });

  }

  $('.map').each(function() {
    initialize($(this));
  });

});