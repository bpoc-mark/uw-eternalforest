<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<?php
	if ($str[1] == "") {
		echo '<h1 class="logo"><a href="/"><img src="/images/common/logo.svg" alt=""></a></h1>';
	} else {
		echo '<p class="logo"><a href="/"><img src="/images/common/logo.svg" alt=""></a></p>';
	}
	?>

	<nav>
		<ul>
			<li><a href="/" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>HOME</a></li>
			<li><a href="/about/" <?php if ($str[1] == "about") {
															echo ' class="here"';
														} ?>>about</a></li>
		</ul>
	</nav>

</div>
