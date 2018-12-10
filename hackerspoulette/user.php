<?php

    $options = array(
        "firstname" => array ( "filter" => FILTER_SANITIZE_STRING,
                               "flags"  => FILTER_FLAG_STRIP_HIGH,
                             ),
        "lastname" => array ( "filter" => FILTER_SANITIZE_STRING,
                              "flags"  => FILTER_FLAG_STRIP_HIGH,
                            ),
        "email" => FILTER_VALIDATE_EMAIL,
        "country" => FILTER_SANITIZE_STRING,
        "message" => FILTER_SANITIZE_STRING,
        "gender" => FILTER_SANITIZE_NUMBER_INT,
        "topic" => FILTER_SANITIZE_NUMBER_INT,
    );

    $result = filter_input_array(INPUT_POST, $options);

    if ($result != null AND $result != FALSE) {

        echo "Clean! <br>";
    
    } else {
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }

    if ($result["gender"] == 1) {
        $result["gender"] = "Homme";
    }
    else if ($result["gender"] == 2) {
        $result["gender"] = "Femme";
    }
    else {
        $result["gender"] = null;
    }

    /*if(is_array($result["topic"])) {
        foreach($result["topic"] as $topic) {
            echo "{$topic}";
        }
    }*/


        

    foreach($options as $key => $value) 
    {
       $result[$key]=trim($result[$key]);
    }
    

    echo $result['firstname'] . "<br>";
	echo $result['lastname'] . "<br>";
	echo $result['email'] . "<br>";
    echo $result['country'] . "<br>";
    echo $result["message"] . "<br>";
    echo $result["gender"] . "<br>";
      //---------------------------------------------------------------


    if(!empty($_POST["topic"])) {
        foreach($_POST['topic'] as $selected) {
            
                if($selected == 1) {
                    echo "Demande d'informations<br>";
                }
                else if($selected == 2) {
                    echo "Commander<br>";
                }
                else if($selected == 3) {
                    echo "Vendre des pièces<br>";
                }
                else {
                    echo null . "<br>";
                }
            }

        }

        else  {
            echo "Autres";
        }
//---------------------------------------------------------------------------------------------
       /* if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
        {
	        $passage_ligne = "\r\n";
        }
        else
        {
	        $passage_ligne = "\n";
        }

        $header = "From: \"test\"<maghe.dylan@gmail.com>".$passage_ligne;

        $header.= "Reply-to: \"Test\" <maghe.dylan@gmail.com>".$passage_ligne;
        
        $header.= "MIME-Version: 1.0".$passage_ligne; 
        
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        

        $message = "...";

$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message .= "...";

$boundary = "-----=".md5(rand());*/
    //-----------------------------------------------------------------
/*    $mail = 'maghe.dylan@gmail.com'; // Déclaration de l'adresse de destination.

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    
    {
    
        $passage_ligne = "\r\n";
    
    }
    
    else
    
    {
    
        $passage_ligne = "\n";
    
    }
    
    //=====Déclaration des messages au format texte et au format HTML.
    
    $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
    
    $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
    
    //==========
    
     
    
    //=====Création de la boundary
    
    $boundary = "-----=".md5(rand());
    
    //==========
    
     
    
    //=====Définition du sujet.
    
    $sujet = "Hey mon ami !";
    
    //=========
    
     
    
    //=====Création du header de l'e-mail.
    
    $header = "From: \"Dyl\"<maghe.dylan@gmail.com>".$passage_ligne;
    
    $header.= "Reply-to: \"Dyl\" <maghe.dylan@gmail.com>".$passage_ligne;
    
    $header.= "MIME-Version: 1.0".$passage_ligne;
    
    $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
    //==========
    
     
    
    //=====Création du message.
    
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    
    //=====Ajout du message au format texte.
    
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    
    //==========
    
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    
    //=====Ajout du message au format HTML
    
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    
    $message.= $passage_ligne.$message_html.$passage_ligne;
    
    //==========
    
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    
    //==========
    
     
    
    //=====Envoi de l'e-mail.
    
    mail($mail,$sujet,$message,$header);
    /*
    //==========

    //-----------------------------------------------------------------

    /*if (isset($_POST["lastname"]) AND isset($_POST["firstname"]) AND isset($_POST["email"]) AND isset($_POST["gender"]) AND isset($_POST["message"])) {
        print_r($_POST["firstname"] . " " . $_POST["lastname"] . " " . $_POST["email"] . " " . $_POST["country"] . " " . $_POST["gender"] . " " . $_POST["topic"] . " " . $_POST["message"]);
    }   */
?>