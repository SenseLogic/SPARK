<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">



















<div class="contact-map-container">
    <div id="contact-map" class="contact-map">
    </div>
</div>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // -- FUNCTIONS

    function InitializeContactHeadingMap(
        )
    {
        var
            map,
            position;

        position = [ 45.4405367, 12.3112397 ];

        map =
            L.map(
                "contact-map",
                {
                    zoomControl : true
                }
                ).setView( position, 17 );

        L.tileLayer(
            "https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.{ext}",
            {
                minZoom: 16,
                maxZoom: 17,
                attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a>',
                ext: "png"
            }
            ).addTo(map);

        var marker_icon =
            L.icon(
                {
                    iconUrl : "/static/image/contact/blue_map_marker_icon.svg",
                    iconSize : [ 18, 28 ],
                    iconAnchor : [ 9, 28 ]
                }
                );

        L.marker(
            position,
            {
                icon: marker_icon
            }
            ).addTo( map );
    }

    // -- STATEMENTS

    DelayCall( InitializeContactHeadingMap, 2 );
</script>
<!--
<style>
    .contact-map
    {
        margin-top: 2rem;
        margin-bottom: 2rem;
        height: 50vh;
        width: 100%;
    }

    .contact-map > *
    {
        display: none;
    }
</style>
<div id="contact-map" class="contact-map" style="background: url( '/static/image/contact/background.avif' ) no-repeat center center / cover, url( '/static/image/contact/background.avif.preload.avif' ) no-repeat center center / cover">
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=MFqwresw42pIQivrQjXTWSk88hNokiA2&language=<?php echo $this->LanguageCode; ?>&region=BE"></script>
<script>
    // -- STATEMENTS

    var map_location =
        {
            lat: 45.4305367,
            lng: 12.3112397
        };

    var map
        = new google.maps.Map(
            document.getElementById( "contact-map" ),
            {
                center: map_location,
                zoom: 18,
                zoomControl: true,
                navigationControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                rotateControl: false,
                fullscreenControl: false,
                scrollwheel: false,
                draggable: false,
                styles: [
                {
                    "featureType" : "administrative",
                    "elementType" : "all",
                    "stylers" : [
                        {
                            "visibility" : "on"
                        },
                        {
                            "lightness" : 33
                        }
                    ]
                },
                {
                    "featureType" : "landscape",
                    "elementType" : "all",
                    "stylers" : [
                        {
                            "color" : "#f2e5d4"
                        }
                    ]
                },
                {
                    "featureType" : "poi.park",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "color" : "#c5dac6"
                        }
                    ]
                },
                {
                    "featureType" : "poi.park",
                    "elementType" : "labels",
                    "stylers" : [
                        {
                            "visibility" : "on"
                        },
                        {
                            "lightness" : 20
                        }
                    ]
                },
                {
                    "featureType" : "road",
                    "elementType" : "all",
                    "stylers" : [
                        {
                            "lightness" : 20
                        }
                    ]
                },
                {
                    "featureType" : "road.highway",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "color" : "#c5c6c6"
                        }
                    ]
                },
                {
                    "featureType" : "road.arterial",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "color" : "#e4d7c6"
                        }
                    ]
                },
                {
                    "featureType" : "road.local",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "color" : "#fbfaf7"
                        }
                    ]
                },
                {
                    "featureType" : "water",
                    "elementType" : "all",
                    "stylers" : [
                        {
                            "visibility" : "on"
                        },
                        {
                            "color" : "#acbcc9"
                        }
                    ]
                }
            ]
            }
            );

    var marker = new google.maps.Marker(
        {
            position: map_location,
            map: map
        }
        );
</script>
-->
