<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="instaGet.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$('.output-container').instaGet({
				// get your user key and access token at http://projects.craftedpixelz.co.uk/jqinstapics/ - Bottom of the page
				'key': '123456798', //Insert Key Here
				'access_token': '1234565789.654984615.21654848.5165198498', //Insert Access Token Here
				'count': '7', // How many pictures do you want to show up?
				'links': true // Do you want the pictures to link to the original on instagram?
			});
		});
	</script> 
</head>
<body>
<ul class="output-container"></ul>

</body>
</html>