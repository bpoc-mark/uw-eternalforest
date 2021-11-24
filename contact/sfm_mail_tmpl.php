<?php

/*--------------------------------------------------------------------------

	フォームメール - sformmmail2　管理者宛に送信されるメールです

--------------------------------------------------------------------------*/

// 受け取る時のSubject（件名）
$mailSubject = '[はままつ悠久の杜] お問合わせを受け付けました';

//送信メッセージ
$mailMessage = <<< EOD
以下の内容が「お問い合わせフォーム」より送信されました。
内容を確認の上、速やかにお客様へ連絡してください。
────────────────────────────────────

■お名前
{$sfm_mail->name}

■メールアドレス
{$sfm_mail->email}

■お電話番号
{$sfm_mail->tel}

■ご住所
〒{$sfm_mail->zip}
{$sfm_mail->address}

■お問い合わせ内容
{$sfm_mail->message}


────────────────────────────────────

□ユーザー情報
$sfm_userinfo
EOD;
