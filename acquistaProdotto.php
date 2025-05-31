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
    window.onload =function (){
        <?php
            $prodotto=$_GET['idProdotto'];
            echo "var prodotto =" . $prodotto.";"
        ?>
        const input = document.createElement("input");
        input.type = "hidden";
        input.name = "idProdotto";
        input.value = prodotto;
        document.getElementById("form").appendChild(input);
    }


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <body class="centered">
        <div id="navbar" class="gradient">
            <button id="homeButton" onclick="home()">E-Cannizzaro</button>
            <button onclick="registraUtente()">Registra Utente</button>
            <button onclick="inserisciProdotto()">Inserisci Prodotto</button>
            <button onclick="elencoUtenti()">Elenco utenti</button>
        </div>
        <h1>Inserisci nuovo acquisto</h1>
        <div class="relevant">
            <h3>Chi acquista il prodotto?</h3>
            <form action="acquistoEffettuato.php" method="POST" id="form">
                <select name="idUtente"> 
                    <?php
                        $conn = new mysqli("localhost", "root", "", "eCannizzaro");
                        $sql = "SELECT nome,cognome 
                                FROM utenti";
                        $utenti=mysqli_query($conn, $sql);
                        $i=0;
                        foreach ($utenti as $row) {
                            $i++;
                            echo "<option value='".$i."'>".$row["nome"]." ".$row["cognome"]."</option>";
                        }
                    ?>    
                </select>
                <button type="submit" class="relevant">acquista</button>
            </form>
            
            <p id="p"></p>
        </div>
    </body>
</html>