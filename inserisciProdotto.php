<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utente registrato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<script>
    function checkAndSubmit(){
        var marca = document.getElementById("marca").value;
        var modello = document.getElementById("modello").value;
        var prezzo = document.getElementById("prezzo").value;
        marca=marca.trim();
        modello=modello.trim();
        if(marca == "" || modello == "" || prezzo == "") {
            alert("Tutti i campi sono obbligatori");
            return;
        }else{
            
            document.getElementById("datiProdotto").submit();   
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <body>
        <div id="navbar" class="gradient">
            <button id="homeButton" onclick="home()">E-Cannizzaro</button>
            <button onclick="registraUtente()">Registra Utente</button>
            <button onclick="inserisciProdotto()">Inserisci Prodotto</button>
            <button onclick="elencoUtenti()">Elenco utenti</button>
        </div>
        <h1>Inserisci nuovo prodotto</h1>
        <div class="relevant">
            <h6>tutti i campi sono obbligatori</h6>
            <form id="datiProdotto" action="prodottoInserito.php" method="post">
                <table>
                    <tr>
                        <td>marca</td>
                        <td><input type="text" id="marca" name="marca" required></td>
                    </tr>
                    <tr>
                        <td>modello</td>
                        <td><input type="text" id="modello" name="modello" required></td>
                    </tr>
                    <tr>
                        <td>prezzo</td>
                        <td><input type="number" id="prezzo" name="prezzo" required></td>
                    </tr>    
                </table>
                <td><button type="button" onclick="checkAndSubmit()" class="relevant">Inserisci</button></td>
            </form>
    </body>
</html>