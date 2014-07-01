<?php
/*
Template Name: email
*/
if (!empty($_POST)) {

    if(empty($_POST['name-user']) || empty($_POST['comment'])|| empty($_POST['phone']) || empty($_POST['dirigido'])){
        $arrayMsj['success'] = FALSE;
        $arrayMsj['message'] = 'Todos los campos son requeridos';
        echo (json_encode($arrayMsj));
        exit;
    }
    require '/home/redlat/public_html/via/include/PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->IsSendmail();
    $mail->FromName ='Formulario Circulart' ;
    $mail->CharSet = 'UTF-8';
    $mail->From = 'info@circulart.org';
    $mail->Subject = 'Mensaje de circulart Web';
    $mail->MsgHTML('Mensaje con HTML');
    $template = '<h1>Mensaje enviado desde el formulario de Circulart</h1><br><br>';
    $template .= 'Nombre: ' . $_POST['name-user'] . '<br>';
    $template .= 'Email: ' . $_POST['email'] .'<br>';
    $template .= 'telefono: ' . $_POST['phone'] .'<br>';
    $template .= 'Mensaje: <br>' . $_POST['comment'] ;
    $mail->Body = $template;
    $mail->AddAddress($_POST['dirigido'], '');
    $mail->Send();

    $arrayMsj['success'] = TRUE;
    $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
    echo (json_encode($arrayMsj));
    exit;
}else{
    echo "Error al intentar acceder";
}
