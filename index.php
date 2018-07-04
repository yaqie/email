<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'mx1.hostinger.co.id';
$mail->SMTPAuth = true;
$mail->Username = 'admin@ahmadyahya.web.id';
$mail->Password = 'Programmer1';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('admin@ahmadyahya.web.id', 'AhmadYahya.Web.ID');
//$mail->addReplyTo('admin@ahmadyahya.web.id', 'blablabla');

// Menambahkan penerima
$mail->addAddress('ahmadyahyaasysyidqie@gmail.com');

// Menambahkan beberapa penerima
//$mail->addAddress('penerima2@contoh.com');
//$mail->addAddress('penerima3@contoh.com');

// Menambahkan cc atau bcc 
//$mail->addCC('ahmadyahyaasysyidqie@gmail.com');
//$mail->addBCC('ahmadyahyaasysyidqie@gmail.com');

// Header email
$mail->addCustomHeader('X-custom-header', 'custom-value');
// Subjek email
$mail->Subject = 'Kirim Email via SMTP Server di PHP menggunakan PHPMailer';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "
<body style=\"margin: 0; padding: 0;\">
    <table border=\"0\" style=\"border: 1px solid #cccccc;\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
        <tr>
            <td bgcolor=\"#F5F5F5\" style=\"padding: 20px 0 30px 0;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
                    <td align=\"center\" style=\"padding: 40px 0 30px 0;color: #695aa6; font-family: Arial, sans-serif; font-size: 24px; line-height: 20px;border-bottom:4px solid #695aa6;\">
                        <a href=\"https://www.ahmadyahya.web.id\" style=\"text-decoration:none;\"><font color=\"#695aa6\"><b>AhmadYahya . Web . ID</b></font></a>
                    </td>
                    <tr>
                        <td bgcolor=\"#ffffff\" style=\"padding: 40px 30px 40px 30px;\">
						    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
							    <tr>
							        <td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 24px;\">
									    <b>Lorem ipsum dolor sit amet!</b>
									</td>
							    </tr>
							    <tr>
							        <td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;padding: 20px 0 30px 0;\" >
							            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
							        </td>
							    </tr>
							    <tr>
							        <td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;\">
							            Row 3
							        </td>
							    </tr>
							</table>
						</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 30px 30px 30px 30px;\">
						    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
							    <tr>
							        <td style=\"text-align:center;color: #5b5858; font-family: Arial, sans-serif; font-size: 14px;\">
									    &copy; <a href=\"https://www.ahmadyahya.web.id\"><font color=\"#5b5858\">ahmadyahya.web.id</a> 2018 - all right reserved
									</td>
							    </tr>
							</table>
						</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
";
$mail->Body = $mailContent;

// Menambahakn lampiran
//$mail->addAttachment('lmp/file1.pdf');
//$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru

// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}