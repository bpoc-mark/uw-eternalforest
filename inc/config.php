<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

// $val = $_COOKIE["switchScreen"];

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if ($_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "はままつ悠久の杜 - 浜松 三方原の台地に新しい時代の大型霊園が誕生");

//キーワード
define("KEY_WORD", "霊園,浜松,お墓,墓地,芝生墓所,花壇墓所,樹木墓所,納骨堂,悠久の杜");

//ディスクリプション
define("DESCRIPTION", "浜松 三方原の台地に新しい時代の大型霊園が誕生。四季折々の景観が楽しめ、地域の皆さまにも気軽に足を運んでいただけるような霊園を目指しています。");

//H1文言
define("SEO_WORDS", "");
