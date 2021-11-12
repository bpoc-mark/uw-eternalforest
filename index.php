<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<br><br><br><br><br><br>
			<h1 style="font-size: 20px ;font-weight: 700;">自然の景観を生かした、自由で新しい霊園に</h1>
			<p>「公益財団法人はままつ悠久の杜」は2021年８月に静岡県知事より「公益財団法人」の認定、浜松市長から「墓地経営許可」を得て、2022年５月に三方原エリアに開園を計画しています。
				広大なゴルフ場跡地を造成し、自然豊かな起伏に富んだ地形を生かし、静岡県西部エリアでは最大級の7000区画の規模を備えた大型霊園となります。お墓の種類によっては面積をゆとりある広さに設定し、宗教や宗派にとらわれず、樹木葬、花壇葬、芝生葬、永代供養、ペット霊園など、さまざまな埋葬形態に対応していく予定です。
				四季折々の景観が楽しめるよう、園内の樹木や植栽の監修は樹木医の塚本こなみさんにお願いし、地域の皆さまにも気軽に足を運んでいただけるような霊園を目指しています。
			</p>
			<br><br>
			<h2>開園に向けての私たちの思い</h2>
			<br><br><br><br><br>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
