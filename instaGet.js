/*
 * instaGet
 * Created by: Jon Gamble - http://www.trimarkdigital.com
 * Version: 1.0
 * Copyright: Trimark Digital
 * License: MIT license
 * Updated: November 13 2013
 * Adapted from: jQInstaPics by Abid Din - http://craftedpixelz.co.uk
*/

// Get Instagram pictures
(function ($) {
	$.fn.instaGet = function (options) {
		// Defaults
		var defaults = {
			"key": null,
			"access_token": null,
			"count": 4,
			"links": true
		};
		var user = $.extend(true, defaults, options);
		return this.each(function () {
			// Vars
			var list = $(this);
			var url = "https://api.instagram.com/v1/users/" + user.key + "/media/recent?access_token=" + user.access_token + "&count=" + user.count + "&callback=?";
			
			// Get the images	
			$.ajax({
				url: url,
				dataType: 'json',
				error: function(data, status, xhr){
					console.log(data);
				},
				success: function(data){
					if(data.data){
						$.each(data.data, function (i, val) {
							var li = $("<li/>").appendTo(list);
							if(user.links === true){
								var a = $("<a/>", {"href": val.link, "target": "_blank"}).appendTo(li);
								var img = $("<img/>", {"src": val.images.thumbnail.url}).appendTo(a);
							}else {
								var img = $("<img/>", {"src": val.images.thumbnail.url}).appendTo(li);
							}
							
							if (val.caption && a){
								a.attr("title", val.caption.text);
							}
						});
					}else{
						console.log(data.meta);
					}
				}
			});
			
			if(user.key == null || user.access_token == null){
			  list.append("<li>You Forgot to put in your user_id and/or access_token!</li>");
			}

		});
	};
})(jQuery);