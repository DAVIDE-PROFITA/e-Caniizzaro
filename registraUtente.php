<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<script>
    function checkAndSubmit(){
        if(document.getElementById("nome").value == "" || document.getElementById("cognome").value == "" || document.getElementById("email").value == "" || document.getElementById("password").value == "" || document.getElementById("passwordCheck").value == "") {
            alert("Tutti i campi sono obbligatori");
            return;
        }else{
            var password = document.getElementById("password").value;
            password=password.trim();
            var passwordCheck = document.getElementById("passwordCheck").value;
            passwordCheck=passwordCheck.trim();
            if(password != passwordCheck) {
                alert("Le password non coincidono");
            } else {
                document.getElementById("datiUtente").submit();
            }
            
        }   
    }

    
    function home(){
        window.location.href = "index.php";
    }
    function registraUtente(){
        window.location.href = "registraUtente.php";
    }
    function inserisciProdotto(){
        window.location.href = "inserisciProdotto.php";
    }
    function elencoUtenti(){
        window.location.href = "elencoUtenti.php";
    }
</script>
<body  class="centered">
    <div id="navbar" class="gradient">
        <button id="homeButton" onclick="home()">E-Cannizzaro</button>
        <button onclick="registraUtente()">Registra Utente</button>
        <button onclick="inserisciProdotto()">Inserisci Prodotto</button>
        <button onclick="elencoUtenti()">Elenco utenti</button>
    </div>
    
    <h1 style="text-align:center;">Registra nuovo utente</h1>
    <div class="relevant">
        <h6>tutti i campi sono obbligatori</h6>
        <form id="datiUtente" action="utenteRegistrato.php" method="post">
            <table>
                <tr>
                    <td>nome</td>
                    <td><input type="text" id="nome" name="nome" required></td>
                </tr>
                <tr>
                    <td>cognome</td>
                    <td><input type="text" id="cognome" name="cognome" required></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td>conferma password</td>
                    <td><input type="password" id="passwordCheck" name="passwordCheck" required></td>
                </tr>
            </table>
        </form>
        
        <input type="button" value="Invia" onclick="checkAndSubmit()" class="relevant">
        
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>