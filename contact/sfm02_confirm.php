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

    <main id="Contact" class="sfm2">
      <section class="jumbo_sect">
				<div class="wrapper">
					<div class="container">
						<h3>お問い合わせフォーム</h3>
					</div>
				</div>
			</section>
      <section class="form-sec">
        <div class="container contact_info">
					<p>お電話でのお問い合わせも承っております。</p>
					<div class="tel_wrap">
						<span>ヨイハナ</span>
						<a href="tel:0120-4187-07"><img src="/images/contact/tel_icon.png" alt="">0120-4187-07</a>
						<p>(月～金 9:00～16:00)</p>
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

            <table>
              <p>
                下記フォームに必要事項を入力の上、【ご入力内容の確認】ボタンをクリックして下さい。<br>
                お手数ですが、必須項目は全てご入力下さい。<br>
                お問合せのご回答は迅速に対応させて頂きますが、内容により多少お時間を頂く事もございますので、ご了承下さい。
              </p>
              <tr>
                <th><span class="need">必須</span>お名前</th>
                <td>
                  <p><?php echo $sfm_html->name; ?></p>
                </td>
              </tr>

              <tr>
                <th><span class="need">必須</span>メールアドレス</th>
                <td>
                  <p><?php echo $sfm_html->email; ?></p>
                </td>
              </tr>

              <tr>
                <th><span class="need">必須</span>お電話番号</th>
                <td>
                  <p><?php echo $sfm_html->tel; ?></p>
                </td>
              </tr>

              <tr>
                <th><span class="need">必須</span>ご住所</th>
                <td>
                  <p>〒<?php echo $sfm_html->zip; ?></p>
                  <p><?php echo $sfm_html->address; ?></p>
                </td>
              </tr>

              <tr>
                <th><span class="need optional">任意</span>お問い合わせ内容</th>
                <td>
                  <p><?php echo $sfm_html->message; ?></p>
                </td>
              </tr>

            </table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
        </div>
      </section>
    </main>


    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
