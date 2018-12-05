<?php

    $options = array(
        "firstname" => FILTER_SANITIZE_STRING,
        "lastname" => FILTER_SANITIZE_STRING,
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
            
        
    
    //-----------------------------------------------------------------

    /*if (isset($_POST["lastname"]) AND isset($_POST["firstname"]) AND isset($_POST["email"]) AND isset($_POST["gender"]) AND isset($_POST["message"])) {
        print_r($_POST["firstname"] . " " . $_POST["lastname"] . " " . $_POST["email"] . " " . $_POST["country"] . " " . $_POST["gender"] . " " . $_POST["topic"] . " " . $_POST["message"]);
    }   */
?>