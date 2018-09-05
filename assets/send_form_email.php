<?php

if (isset($_POST['f_name']) && isset($_POST['f_email']) && isset($_POST['f_phone']) && isset($_POST['f_cnpj']) && isset($_POST['f_sector']) && isset($_POST['f_faturamento']) && isset($_POST['f_valorMedio'])) {
    
    $name = $_POST['f_name'];
    $email = $_POST['f_email'];
    $to = 'contato@fontanivamercantil.com.br';
    $subject = "Contato Site Fontaniva";
    $body ='<html>
                <body>
                    <h2>Contato Site Fontaniva</h2>
                    <hr>
                    <p>Nome: '.$f_name.'</p>
                    <p>E-mail: '.$f_email.'</p>
                    <p>Telefone: '.$f_phone.'</p>
                    <p>CNPJ: '.$f_cnpj.'</p>
                    <p>Setor: '.$f_sector.'</p>
                    <p>Faturamento: '.$f_faturamento.'</p>
                    <p>Valor medio: '.$f_valorMedio.'</p>
                    <p>Mensagem: '.$f_msg.'</p>
                </body>
            </html>';
    
    //headers
    
    $headers = "From: ".$f_name." <".$f_email."> \r\n";
    $headers = "Reply-To: ".$f_email."\r\n";
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-type: text/html; charset=utf-8";
    
    //send
    
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo "<br>";
        echo "Obrigado pelo contato. Retornaremos em breve";
    } else {
        echo "Houve um erro! Por favor, tente novamente.";        
    }
}