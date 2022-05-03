<html>
	<head>
		<title>Hello world em PHP!</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<style type="text/css">
			.linha {
				font-weght: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
	</head>
	<body>
		<?php
			print("Hello world!<br />");
			for ( $i = 0 ; $i < 10 ; $i++ ) {
				print("<span class=\"linha\">Linha número " . $i . "</span><br />");
			}
		?>
		<script>
			$(document).ready(function() {
				alert("whoooo");	
			});
		</script>
	</body>
</html>