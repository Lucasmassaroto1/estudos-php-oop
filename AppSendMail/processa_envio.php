<?php 
    require './bibliotecas/PHPMailer/Exception.php';
    require './bibliotecas/PHPMailer/OAuth.php';
    require './bibliotecas/PHPMailer/PHPMailer.php';
    require './bibliotecas/PHPMailer/POP3.php';
    require './bibliotecas/PHPMailer/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //print_r($_POST);

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atribute){
            return $this->$atribute;
        }
        public function __set($atribute, $value){
            $this->$atribute = $value;
        }
        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            return true;
        }
    }

    $mensagem = new Mensagem();
    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    //print_r($mensagem);

    if(!$mensagem->mensagemValida()){
        echo 'Mensagem invalida';
        die();
    }

    $mail = new PHPMailer(true);
    try{
        //Server settings
        $mail->SMTPDebug = 2;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-relay.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'Username@gmail.com';                     //SMTP username
        $mail->Password   = 'Password';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('exemplo@gmail.com', 'Lucas');
        $mail->addAddress('exemplo@gmail.com', 'Lucas User');     //Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Ola';
        $mail->Body    = 'Oi eu sou o conteudo do <b>E mail</b>.';
        $mail->AltBody = 'Oi eu sou o conteudo do E mail.';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Não foi possivel enviar este email! Por favor tente novamente mais tarde.";
        echo "Detalhes do erro: {$mail->ErrorInfo}";
    }
?>