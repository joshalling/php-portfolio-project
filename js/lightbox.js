//append body with lightbox div
var $overlay = $('<div id="overlay"></div>')
var $image = $('<img class="content">');
$overlay.append($image);
$("body").append($overlay);

//capture the click event on links in #gallery
$("#gallery li a").click(function(e) {
	e.preventDefault();
	var href = $(this).attr("href");
	$image.attr("src", href)
	$overlay.show();
});

//hide when clicked on
$overlay.click(function() {
	$overlay.hide();
});
