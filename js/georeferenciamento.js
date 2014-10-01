		function exibirPosicao(position){
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			
			var pos = new google.maps.LatLng(latitude, longitude);
			
			var options = {
				zoom: 18,
				center: pos
			};
			
			var div = document.getElementById("mapa");
			var map = new google.maps.Map(div, options);
			
			var marker = new google.maps.Marker({
				position: pos,
				map: map,
				title: "Você está aqui"
			});
		}
		function initialize(){
			navigator.geolocation.getCurrentPosition(exibirPosicao);
		}
		
		google.maps.event.addDomListener(window, "load", initialize);