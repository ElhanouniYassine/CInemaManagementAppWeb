<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        text-align: center;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    input[type="text"], input[type="email"], input[type="password"] {
        width: calc(100% - 22px); /* Réduire la largeur pour tenir compte de la bordure */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        display: block;
        margin-bottom: 10px;
    }
    
    input[type="password"]::placeholder {
        color: #999;
    }
    
    input[type="submit"] {
        background-color: #ffcc00; /* Jaune */
        color: white;
        padding: 10px 0; /* Ajout de rembourrage haut/bas */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%; /* Largeur totale */
        box-sizing: border-box;
        display: block;
    }
    
    input[type="submit"]:hover {
        background-color: #ffdb4d; /* Jaune clair au survol */
    }
    
    .have-account {
        text-align: center;
        color: #999;
        font-size: 14px;
    }
    
    .have-account a {
        color: #999;
        text-decoration: none;
    }
    
    .navbar {
        background-color: #333;
        overflow: hidden;
    }
    
    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    
</style>
</head>
<body>

<div class="navbar">
    <a href="{{route("movies.index")}}">Home</a>
</div>

<div class="container">
    <h2>Sign In </h2>
    <form action="{{route('movies.authenticate')}} " method="post">
        @csrf
        @method("POST")
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Sign In">
        </div>
    </form>
    <div class="have-account">
        vous etes nouveau ? <a href="{{route("movies.registration")}}">Connectez-vous ici</a>
    </div>
</div>

</body>
</html>
