<?php



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hacker Poulette</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container form-container">
        <form action="user.php" method="post">
        <img class=" col-sm-12 form-img" src="hackers-poulette-logo.png" alt="logo hackerspoulette">
            <div class="row">
                <div class="col-sm-6">
                    <label for="firstname">Prénom: </label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Marc">
                </div>
                <div class="col-sm-6">
                    <label for="lastname">Nom: </label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Dupuis">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="utilisateur@gmail.com">
                </div>
                <div class="form-group col-sm-6">
                    <label for="country">Pays: </label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Belgique">
                </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
            <fieldset>
                <legend>Genre</legend>               
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Homme" value="1">
                        <label class="form-check-label" for="Homme">
                            Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Femme" value="2">
                        <label class="form-check-label" for="Femme">
                            Femme
                        </label>
                    </div>               
            </fieldset>
            </div>
            <div class="col-sm-6">
            <fieldset>
                <legend>Sujets</legend>                
                    <div class="form-check">
                        <input class="form-check-input" id="informations" type="checkbox" name="topic[]" value="1">
                        <label class="form-check-label" for="informations">Demande d'informations</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="order" type="checkbox" name="topic[]" value="2">
                        <label class="form-check-label" for="order">Commander</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="sell" type="checkbox" name="topic[]" value="3">
                        <label class="form-check-label" for="sell">Vendre des pièces</label>
                    </div>               
            </fieldset>
            </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="comment">Message:</label>
                    <textarea class="form-control form-message" name="message" rows="5" id="comment"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary form-button">Envoyer</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>






