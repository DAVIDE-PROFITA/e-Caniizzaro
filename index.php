<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel='stylesheet' href="style.css"></style>
        <script>
            function registraUtente(){
               window.location.href = "registraUtente.php";
            }
            function acquistaProdotto(id){
                window.location.href = "acquistaProdotto.php?id="+id;
            }
            function inserisciProdotto(){
                window.location.href = "inserisciProdotto.php";
            }
            function elencoUtenti(){
                window.location.href = "elencoUtenti.php";
            }
        </script>

    </head>
    <body>
        <div id="navbar" class="gradient">
            <button id="homeButton" onclick="home()">E-Cannizzaro</button>
            <button onclick="registraUtente()" >Registra Utente</button>
            <button onclick="inserisciProdotto()">Inserisci Prodotto</button> 
            <button onclick="elencoUtenti()">Elenco utenti</button>
        </div>
        <h1>Home</h1>
        <h3>Benvenuto nel eCommerce cannizzaro</h3>
        <p>Qui puoi comprare e vendere telefoni in sottocosto</p>
        <table>
            <tr>
                <th>marca</th>
                <th>modello</th>
                <th>prezzo</th>
                <th></th>
            </tr>
        
        <?php
            $conn = new mysqli("localhost", "root", "", "eCannizzaro");
            $sql = "SELECT marca,modello,prezzo FROM prodotti";
            $prodotti=mysqli_query($conn, $sql);
            $i=0;
            foreach ($prodotti as $row) {
                $i++;

                echo "<tr class='gradient'>";
                foreach ($row as $value) {
                    echo "<td>".$value."</td>";
                }
                
                echo "<td id='button'><button onclick='acquistaProdotto(\"$i\")'>Acquista</button></td>";
                echo "</tr>";
            }
        ?>
        </table>
        
        <p id="ciao"></p>
        <p>acquisti passati:</p>
        
        <table class="gradient">
            <tr>
                <th>nome</th>
                <th>cognome</th>
                <th>email</th>
                <th>modello</th>
                <th>marca</th>
                <th>data</th>
            </tr>
            <?php
                $conn = new mysqli("localhost", "root", "", "eCannizzaro");
                $sql = "
                    SELECT nome,cognome,email,modello,marca,data 
                    FROM acquisti,utenti,prodotti 
                    WHERE acquisti.idUtente=utenti.id AND acquisti.idProdotto=prodotti.id
                ";
                $acquisti=mysqli_query($conn, $sql);
                foreach ($acquisti as $row) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>