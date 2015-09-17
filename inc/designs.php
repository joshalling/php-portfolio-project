<?php

function get_designs_grad() {
	$grad_designs = array();
	$all = get_designs_all();

	foreach ($all as $design) {
		if ($design["category"] === "grad") {
			$grad_designs[] = $design;
		}
	}

	return array_reverse($grad_designs);
}

function get_designs_wedd() {
	$wedd_designs = array();
	$all = get_designs_all();

	foreach ($all as $design) {
		if ($design["category"] === "wedd") {
			$wedd_designs[] = $design;
		}
	}

	return array_reverse($wedd_designs);
}

function get_designs_other() {
	$other_designs = array();
	$all = get_designs_all();

	foreach ($all as $design) {
		if ($design["category"] === "other") {
			$other_designs[] = $design;
		}
	}

	return array_reverse($other_designs);
}

function get_designs_all() {
    $designs = array();
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement, Andrew",
    	"img" => "img/graduation-announcement-andrew-b.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement, Andrew",
    	"img" => "img/graduation-announcement-andrew-d.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement, Brianna",
    	"img" => "img/graduation-announcement-brianna.jpg",
    	"class" => "land-4x6"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement Back, RJ",
    	"img" => "img/graduation-announcement-rj-back.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement Front, RJ",
    	"img" => "img/graduation-announcement-rj-front.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement Back, Lucy",
    	"img" => "img/graduation-announcement-lucy-back.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement Front, Lucy",
    	"img" => "img/graduation-announcement-lucy-front.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "grad",
    	"name" => "Graduation Announcement, Mariah",
    	"img" => "img/graduation-announcement-mariah.jpg",
    	"class" => "land-5x7"
    );
    $designs[] = array(
    	"category" => "wedd",
    	"name" => "Wedding Invitation Back, Enos",
    	"img" => "img/wedding-invitation-enos-back.jpg",
    	"class" => "port-bot"
    );
    $designs[] = array(
    	"category" => "wedd",
    	"name" => "Wedding Invitation Front, Enos",
    	"img" => "img/wedding-invitation-enos-front.jpg",
    	"class" => "port-top"
    );
    $designs[] = array(
    	"category" => "other",
    	"name" => "Advertisement, TJS Photography",
    	"img" => "img/other-tjs-ad.jpg",
    	"class" => "port-bot"
    );
    $designs[] = array(
    	"category" => "other",
    	"name" => "Collage, RJ",
    	"img" => "img/other-rj-collage.jpg",
    	"class" => "land-8x10"
    );
    $designs[] = array(
    	"category" => "other",
    	"name" => "Lacrosse Poster, RJ",
    	"img" => "img/other-rj-lacrosse.jpg",
    	"class" => "port-top"
    );
    $designs[] = array(
    	"category" => "other",
    	"name" => "Composite, Mariah",
    	"img" => "img/other-mariah-composite.jpg",
    	"class" => "land-5x7"
    ); 
    $designs[] = array(
    	"category" => "other",
    	"name" => "Composite",
    	"img" => "img/other-composite.jpg",
    	"class" => "land-4x6"
    );

    return $designs;
}


?>