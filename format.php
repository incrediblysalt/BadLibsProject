<?php

function index($page) {
	if($page == "form") {
		$str = "<hr /><div class='index'>
					<h2> Index </h2>
					<button type='button' class='btn' onclick='location.href=\"Home.php\"'>Home</button>
					<button type='button' class='btn' onclick='location.href=\"techpage.php\"'>Technologies Used</button>
				</div>";
		return $str;
	}
	elseif($page == "gen") {
		$str = "<hr /><div class='index'>
					<h2> Index </h2>
					<button type='button' class='btn' onclick='location.href=\"Home.php\"'>Home</button>
					<button type='button' class='btn' onclick='location.href=\"techpage.php\"'>Technologies Used</button>
				</div>";
		return $str;
	}
	elseif($page =="tech") {
		$str = "<hr /><div class='index'>
					<h2> Index </h2>
					<button type='button' class='btn' onclick='location.href=\"Home.php\"'>Home</button>
					<button type='button' class='btn' onclick='location.href=\"Form.php\"'>Create New Bad-Lib</button>
				</div>";
		return $str;
	}
	else {
		$str = "<hr /><div class='index'>
					<h2> Index </h2>
					<button type='button' class='btn' onclick='location.href=\"techpage.php\"'>Technologies Used</button>
				</div>";
		return $str;
	}
}

function logo($h, $w) {
	$str = "<object class='logo' data='./video/logo.svg' type='image/svg+xml' height=$h width=$w></object>";
	
	return $str;
}
?>