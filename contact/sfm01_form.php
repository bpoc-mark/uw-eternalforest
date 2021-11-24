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
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title>お問い合わせ | <?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main id="Contact" class="sfm1">
			<section class="jumbo_sect">
				<div class="wrapper">
					<div class="container">
						<h1>お問い合わせフォーム</h1>
					</div>
				</div>
			</section>
			<section class="form-sec">
				<div class="bg_wrapper">
					<div class="container contact_info">
						<p>お電話でのお問い合わせも承っております。</p>
						<div class="tel_wrap">
							<span>ヨイハナ</span>
							<a href="tel:0120-4187-07"><img src="/images/common/tel_icon.svg" alt="">0120-4187-07</a>
							<p>(9:00～17:00 / 年末年始休み)</p>
						</div>
						<figure class="flower_1">
							<img src="/images/contact/flower_1.png" class="pc" alt="">
							<img src="/images/contact/sp/flower_1.png" class="sp" alt="">
						</figure>
						<figure class="flower_2">
							<img src="/images/contact/flower_2.png" alt="">
						</figure>
					</div>
					<div class="form_wrap container">
						
						<form method="post" name="sfm-form" id="sfm-form" action="./">
							<p>
								下記フォームに必要事項を入力の上、【ご入力内容の確認】ボタンをクリックして下さい。<br>
								お手数ですが、必須項目は全てご入力下さい。<br>
								お問合せのご回答は迅速に対応させて頂きますが、内容により多少お時間を頂く事もございますので、ご了承下さい。
							</p>

							<table>
								<tr>
									<th><span class="need">必須</span>お名前</th>
									<td><input type="text" name="name_s" value="" title="" placeholder=""></td>
								</tr>

								<tr>
									<th><span class="need">必須</span>メールアドレス</th>
									<td><input type="text" name="email_s" value="" title="" placeholder=""></td>
								</tr>

								<tr>
									<th><span class="need">必須</span>お電話番号</th>
									<td><input type="text" name="tel_s" value="" title="" placeholder=""></td>
								</tr>

								<tr class="address">
									<th><span class="need">必須</span>ご住所</th>
									<td>
										<span class="zip-wrap">
											<input class="zip" type="text" name="zip_s" size="10" maxlength="8" placeholder="">
										</span>
										<input class="ad_btn" type="button" value="住所自動入力"><br>
										<input class="text02" type="text" name="address_s" size="60" placeholder="">
									</td>
								</tr>


								<tr>
									<th><span class="need optional">任意</span>お問い合わせ内容</th>
									<td><textarea name="message" title=""></textarea></td>
								</tr>

							</table>

							<div class="agree_area" style="display: none;">
								<input type="checkbox" name="agree" id="checkAgree" checked>
								<label for="checkAgree" class="checkAgree">同意します</label>
							</div>

							<div class="submit_area">
								<span>
									<input id="checkSubmit" type="submit" value="入力内容を確認" class="pushbtn" />
								</span>
							</div><!-- submit_area -->


							<input type="hidden" name="mailToNum" value="0" />
							<input type="hidden" name="mode" value="CONFIRM" />
						</form>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
				tel: function(value, element) {
					return this.optional(element) || /^[0-9]+[0-9.-]+$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				tel_s: {
					tel: true,
					required: true,
				},
				'check_s[]': {
					required: true,
				},
				'radio_s[]': {
					required: true,
				},
				zip_s: {
					required: true
				},
				select_s: {
					required: true
				},
				address_s: {
					required: true,
				},
				message_s: {
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				tel_s: {
					tel: "正しい電話番号を入力してください"
				},
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip_s', '', 'address_s', 'address_s');
			});
		});
	</script>
</body>

</html>
