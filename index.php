<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
	
	<link href="bxslider.css" rel="stylesheet" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<script src="bxslider.js"></script>
	<script src="instaGet.js"></script>
	<script>
		jQuery(document).ready(function($) {
			var instagramFeed = $('.output-container').instaGet({
					// get your user key and access token at http://projects.craftedpixelz.co.uk/jqinstapics/ - Bottom of the page
					'key': '32372829', // Insert user key here
					'access_token': '32372829.674061d.1d2e3e104c394c7e8256685b4e5f6244',// Insert Access Token Here
					'count': '7', // How many pictures do you want to show up?
					'links': false // Do you want the pictures to link to the original on instagram?
				}, function(){
					instagramSlider = $('.output-container').bxSlider({
						minSlides: 1,
						maxSlides: 4,
						slideWidth: 150,
						slideMargin: 10,
						moveSlides: 3
						
					});

				}
			);
		});
	</script> 
</head>
<body>
<ul class="output-container"></ul>

</body>
</html>