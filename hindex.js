$.fn.hindex = function () {
	var heading = 1;
	var hindex = '<ol class="hindex-h1">';
	
	$ ("h1, h2, h3, h4").each (function (index, value) {
		if ($ (this).hasClass ("hindexception")) {
			return true;
		}
		
		var id = typeof $ (this).attr ("id") === "undefined" ? "hindex-" + index : $ (this).attr ("id");
		$ (this).attr ("id", id);
		var tagNumber = $ (this)[0].tagName.replace ("H", "");
		var difference = heading - tagNumber;
		
		if (difference < 0) {
			for (difference; difference < 0; difference ++) {
				heading ++;
				hindex += "<ol class='hindex-h" + heading + "'>";
			}
		}
		else if (difference > 0) {
			for (difference; difference > 0; difference --) {
				hindex += "</ol>";
			}
		}
		
		heading = tagNumber;
		hindex += "<li><a href='#" + id + "'>" + $ (this).text () + "</a></li>";
	});
		
	hindex += "</ol><!-- ol.hindex-h1 -->";
	
	$ (this).html (hindex);
};