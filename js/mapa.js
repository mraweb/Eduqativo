/****** MAPS *****/
function initialize() {
	var myLatlng = new google.maps.LatLng(-23.555231,-46.68573);

	var myOptions = {
		zoom: 16,
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		
	}
		var map = new google.maps.Map(document.getElementById("mapa"), myOptions);
		
		var infowindow = new google.maps.InfoWindow(
			{ content: 'Eduqativo - Instituto Choque Cultural<br />Rua Medeiros de Albuquerque, 250<br /> CEP 05436-060 - São Paulo',
				size: new google.maps.Size(),
				position: myLatlng
			});
			infowindow.open(map);
	}

$(function() {
  $('.modal').click(function() {
	$('#mapaTeste, .close').show(function() {
		initialize();
	});
  });
  
  $('.modal').click(function() {
	$('#mask').show()
  });
  
  $('#mask, .close').click(function() {
	$('#mapaTeste, .close').hide()
  });
  
  $('#mask, .close').click(function() {
	$('#mask, .close').hide()
  });
});


var $sidebar   = $("#mapa, .close"),
	$window    = $(window),
	offset     = $sidebar.offset(),
	topPadding = -	10;

$window.scroll(function() {
	if ($window.scrollTop() > offset.top) {
		$sidebar.stop().animate({
			marginTop: $window.scrollTop() - offset.top + topPadding
		});
	} 

});

