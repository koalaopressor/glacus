<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviar($texto, $email, $nome, $nome_remetente = 'Dr Glacus', $assunto = 'Orçamento', $host = 'smtp.gmail.com', $user = 'robo.log.koala@gmail.com', $pass = 'koalaroot05', $porta = 587) {
  $mail = new PHPMailer(true);

  try {
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();
    $mail->Host       = $host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $user;
    $mail->Password   = $pass;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = $porta;

    $mail->setFrom($user, $nome_remetente);
    $mail->addAddress($email, 'Robo Do Site Dr Glacus');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body    = $texto;

    $mail->send();
  }
  catch (Exception $e) {
    echo "Erro Ao Enviar Email: {$mail->ErrorInfo}";
  }
}
?>
