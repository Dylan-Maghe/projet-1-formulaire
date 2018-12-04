
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hacker Poulette</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="user.php" method="post">
        <div class="form-hackers">
            <label for="lastname">Nom: </label>
            <input type="text" name="lastname" id="lastname" required>
        </div>
        <div class="form-hackers">
            <label for="firstname">Prénom: </label>
            <input type="text" name="firstname" id="firstname" required>
        </div>
        <div class="form-hackers">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-hackers">
            <label for="country">Pays: </label>
            <input type="text" name="country" id="country" required>
        </div>
        <fieldset required>
            <legend>Genre</legend>
            <input type="radio" name="gender" id="male" value="1" required> <label for="male">Homme</label>
            <input type="radio" name="gender" id="female" value="2" required> <label for="female">Femme</label>
        </fieldset>
       <!-- <select name="topic">            
            <option>Demande d'informations</option>
            <option>Commander</option>
            <option>Autres</option>
        </select><br>-->
        <div>
            <label for="topic">Sujets: </label>
            <input type="checkbox" name="topic[]" value="1">
            <label for="informations">Demande d'informations<label>
        </div>
        <div>
            <input type="checkbox" name="topic[]" value="2">
            <label for="order">Commander<label>
        </div>
        <div>
            <input type="checkbox" name="topic[]" value="3">
            <label for="sell">Vendre des pièces<label>
        </div>
        <label for="message">Message: </label>
        <div class="form-hackers">
            <textarea rows="4" cols="50" name="message" required></textarea>
        </div>
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>
</html>

<form>






