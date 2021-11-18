<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="h_left">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="公益財団法人 | はままつ | 悠久の杜 | ゆうきゅうのもり"></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt="公益財団法人 | はままつ | 悠久の杜 | ゆうきゅうのもり"></a></p>';
			}
		?>
	</div>
	
	<div class="h_right">
		<nav>
			<ul>
				<li class="sp">
					<a href="/">
						<img src="/images/common/header_logo.svg" alt="公益財団法人 | はままつ | 悠久の杜 | ゆうきゅうのもり">
					</a>
				</li>
				<li><a href="/#sect_2" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>私たちの思い</a></li>
				<li><a href="/#sect_3" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>お墓の種類</a></li>
				<li><a href="/#sect_4" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>Q&A</a></li>
				<li><a href="/#sect_5" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>アクセス</a></li>
				<li <?php if ($str[1] == "") {
					echo ' class="show"';
				} ?>>
					<div class="tel_wrap">
						<span>ヨイハナ</span>
						<a href="tel:0120-4187-07"><img src="/images/common/tel_icon.svg" alt="">0120-4187-07</a>
						<p>(9:00～17:00 / 年末年始休み)</p>
					</div>
				</li>
				<li><a href="/contact/" <?php if ($str[1] == "contact") {
					echo ' class="here"';
				} ?>><img src="/images/common/mail_icon.png" class="sp" alt=""> お問い合わせはこちら</a></li>
				<li class="sp">
					<img src="/images/top/sect_2/item_1_img.png" alt="二橋さん家族">
				</li>
			</ul>
		</nav>
	</div>

	<div class="nav_sp sp">
		<ul>
			<li>
				<a href="tel:tel:0120-4187-07"><img src="/images/common/tel_icon.svg" alt=""></a>
			</li>
			<li>
				<a href="/contact/"><img src="/images/common/mail_icon.png" alt=""></a>
			</li>
			<li>
				<div class="menu" id="header_menu">
					<span class="line line-t"></span>
					<span class="line line-m"></span>
					<span class="line line-b"></span>
					<p></p>
				</div>
			</li>
		</ul>
		
	</div>
	
</div>
