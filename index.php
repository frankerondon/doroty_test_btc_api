<html>

	<head>
	</head>

	<body>
	
		<script type="text/javascript">
		
			
			var apiKey = "a579e7d340fc5d45fed6c1402f9762fa741f98cce89648557cc99b88103b0228";
			var ccStreamer = new WebSocket('wss://streamer.cryptocompare.com/v2?api_key=' + apiKey);
			ccStreamer.onopen = function onStreamOpen() {
				var subRequest = {
					"action": "SubAdd",
					"subs": ["0~Coinbase~BTC~USD"]
				};
				ccStreamer.send(JSON.stringify(subRequest));
			}

			ccStreamer.onmessage = function onStreamMessage(message) {
				var message = event.data;
				
				
				var converJson= JSON.parse(message);
				
				var precio= converJson['P'];
				
				console.log(precio);
				
				document.getElementById('mostrar').innerHTML ="<h1>Bitcoin Price: "+precio+" USD</h1>";
				
			}
		
		</script>
		
			
		<div id="mostrar"></div>
		
		
	
	</body>



</html>