!function ($) {

    $(function () {









        gmap_markers = new GMaps({
            el: '#gmap_marker',
            lat: -3.5078238,
            lng: 39.9078863,
            zoom: 13,
            mapTypeId: 'satellite',
            featureType: "road.local",
            elementType: "labels"
        });

        gmap_markers.addMarker({
            lat: -3.5078238,
            lng: 39.9078863,
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
            mapTypeId: 'satellite',
            featureType: "road.local",
            elementType: "labels"
        });
		$('#geocoding_form').submit(function(e){
			e.preventDefault();
			GMaps.geocode({
			  address: $('#address').val().trim(),
			  callback: function(results, status){
			    if(status=='OK'){
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