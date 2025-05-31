<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utente registrato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <script>
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
        window.onload = function() {
            var datiForm = new FormData();
            JSON.parse(localStorage.getItem("idUtente"))
            JSON.parse(localStorage.getItem("idProdotto"))
            datiForm.append("idUtente", 1);
            datiForm.append("idProdotto",2 );

            fetch(location.href, {
                method: "POST",
                body: datiForm
            })
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
        
        <?php
            $idProdotto = $_POST["idProdotto"];
            $idUtente = $_POST["idUtente"];
              
            $conn = new mysqli("localhost", "root", "", "eCannizzaro");
            $sql = "INSERT INTO acquisti(idUtente, idProdotto, data) VALUES
                    ($idUtente, $idProdotto, CURDATE())";
            $query=mysqli_query($conn,$sql);
            if($query){
                echo "acquisto effettuato con successo";
            }else{
                echo "errore nell'inserimento dell'acquisto";
            }
            
                  
        ?> 
        <button class="relevant" onclick="home()">Torna alla Homepage</button>
        <p id="p"></p>
        <br>
    </body>
</html>