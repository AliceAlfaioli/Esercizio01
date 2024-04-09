<?php  

///// ESERCIZIO 1
setlocale(LC_TIME, 'it_IT.UTF-8'); 

$dataOdierna = date('d F Y');

echo "<h3 style='color: blue;'>La data odierna è: $dataOdierna </h3>"; 



/////ESERCIZIO 2


// Array delle squadre 

$squadre = array(
    "Juventus" => array("Portiere" => "Szczęsny", "Difensori" => ["De Ligt", "Chiellini", "Danilo", "Alex Sandro"], "Centrocampisti" => ["Bentancur", "Arthur", "McKennie"], "Attaccanti" => ["Dybala", "Morata", "Kulusevski"]),
    "Inter" => array("Portiere" => "Handanovič", "Difensori" => ["de Vrij", "Škriniar", "Bastoni"], "Centrocampisti" => ["Barella", "Brozović", "Eriksen"], "Attaccanti" => ["Lautaro Martínez", "Sánchez"]),
    "Milan" => array("Portiere" => "Donnarumma", "Difensori" => ["Hernández", "Kjær", "Tomori", "Calabria"], "Centrocampisti" => ["Kessié", "Bennacer", "Çalhanoğlu"], "Attaccanti" => ["Rebić", "Ibrahimović"])
);

// Ciclo le squadre e le formazioni 

echo "<div style='background-color: lightgray; padding: 20px;'>";

foreach ($squadre as $squadra => $formazione) {
    echo "Squadra: $squadra <br>";
    echo "Formazione: <br>";
    echo "Portiere: " . $formazione["Portiere"] . "<br>";
    echo "Difensori: " . implode(", ", $formazione["Difensori"]) . "<br>";
    echo "Centrocampisti: " . implode(", ", $formazione["Centrocampisti"]) . "<br>";
    echo "Attaccanti: " . implode(", ", $formazione["Attaccanti"]) . "<br><br>";
}

echo "</div>";

///////ESERCIZIO 3



$partite = array(
    array(
        "casa" => "Juventus",
        "ospite" => "Inter",
        "formazioni" => array(
            "Juventus" => array("Portiere" => "Szczęsny", "Difensori" => ["De Ligt", "Chiellini", "Danilo", "Alex Sandro"], "Centrocampisti" => ["Bentancur", "Arthur", "McKennie"], "Attaccanti" => ["Dybala", "Morata", "Kulusevski"]),
            "Inter" => array("Portiere" => "Handanovič", "Difensori" => ["de Vrij", "Škriniar", "Bastoni"], "Centrocampisti" => ["Barella", "Brozović", "Eriksen"], "Attaccanti" => ["Lautaro Martínez", "Sánchez"])
        )
    ),
    array(
        "casa" => "Milan",
        "ospite" => "Roma",
        "formazioni" => array(
            "Milan" => array("Portiere" => "Donnarumma", "Difensori" => ["Hernández", "Kjær", "Tomori", "Calabria"], "Centrocampisti" => ["Kessié", "Bennacer", "Çalhanoğlu"], "Attaccanti" => ["Rebić", "Ibrahimović"]),
            "Roma" => array("Portiere" => "Pau López", "Difensori" => ["Ibañez", "Mancini", "Karsdorp"], "Centrocampisti" => ["Veretout", "Cristante", "Pellegrini"], "Attaccanti" => ["Mkhitaryan", "Abraham"])
        )
    )
);


foreach ($partite as $partita) {
    echo "<div style='background-color: lightgray; padding: 20px; margin-top: 20px;'>";
    echo "Partita: " . $partita["casa"] . " vs " . $partita["ospite"] . "<br>";
    echo "Formazioni: <br>";
    foreach ($partita["formazioni"] as $squadra => $formazione) {
        echo "Squadra: $squadra <br>";
        echo "Portiere: " . $formazione["Portiere"] . "<br>";
        echo "Difensori: " . implode(", ", $formazione["Difensori"]) . "<br>";
        echo "Centrocampisti: " . implode(", ", $formazione["Centrocampisti"]) . "<br>";
        echo "Attaccanti: " . implode(", ", $formazione["Attaccanti"]) . "<br><br>";
    }
    echo "</div>";
    echo "<br>";
}

?> 










