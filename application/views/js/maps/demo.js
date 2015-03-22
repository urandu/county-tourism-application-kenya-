!function ($) {


    $(function () {






        var latlng = new google.maps.LatLng(51.4975941, -0.0803232);
        var map = new google.maps.Map(document.getElementById('map2'), {
            center: latlng,
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: 'Set lat/lon values for this property',
            draggable: true
        });

        google.maps.event.addListener(marker, 'dragend', function (event) {
            document.getElementById("latbox").value = this.getPosition().lat();
            document.getElementById("lngbox").value = this.getPosition().lng();
        });








        gmap_markers = new GMaps({
            el: '#gmap_marker',
            lat: -4.5078238,
            lng: 39.9078863,
            zoom: 13,
            mapTypeId: 'satellite'
        });

        gmap_markers.addMarker({
            lat: -3.5078238,
            lng: 39.9075863,
            title: 'Marker',
            infoWindow: {
                content: 'Info content here...'
            }
        });

        map = new GMaps({
            div: '#gmap_geocoding',
            lat: -3.5078238,
            lng: 39.9078863,
            zoom: 13,
            mapTypeId: 'satellite'
        });
        $('#geocoding_form').submit(function (e) {
            e.preventDefault();
            GMaps.geocode({
                address: $('#address').val().trim(),
                callback: function (results, status) {
                    if (status == 'OK') {
                        var latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });
                    }
                }
            });
        });

    });
}(window.jQuery);