<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <h1>PHP snacks</h1>

    <h2>
        1. Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    </h2>

    <?php
        $games = [
            [ 
                "team1" => "Boston Celtics",
                "team2" => "Los Angeles Lakers",
                "score1" => 100,
                "score2" => 80
            ],
            [
                "team1" => "New York Knicks",
                "team2" => "Philadelphia 76ers",
                "score1" => 120,
                "score2" => 90
            ],
            [
                "team1" => "Toronto Raptors",
                "team2" => "Chicago Bulls",
                "score1" => 110,
                "score2" => 90
            ],
            [
                "team1" => "Oklahoma City Thunder",
                "team2" => "Utah Jazz",
                "score1" => 112,
                "score2" => 70
            ],
            [
                "team1" => "Golden State Warriors",
                "team2" => "Los Angeles Clippers",
                "score1" => 141,
                "score2" => 102
            ],
        ]
    ?>
    <ul>
        <?php
            for ($i = 0; $i < count($games); $i++) {
                echo "<p>";
                echo $games[$i]["team1"] . " " . $games[$i]["score1"] . " - " . $games[$i]["score2"] . " " . $games[$i]["team2"];
                echo "</p>";
            }
        ?>
    </ul>

    <h2>
        2. Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    </h2>
    
    <?php
    if (isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])) {
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        
        if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    }

    ?>
    <h2>
        3. Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    </h2>

    <?php
        $numbers = [];
        for ($i = 0; $i < 15; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbers = array_unique($numbers);
        print_r($numbers);
    ?>

    <h2>
        4. Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo.
    </h2>

    <?php
        $paragraph = "I have a dream today. I have a dream that one day every valley shall be exhalted, every hill and mountain. shall be made low, the rough places. will be made plain, and the crooked places will be made. straight, and the glory of the Lord shall be revealed, and all. flesh shall see it together. This is our hope."
    ?>
    <div>
    <?php
        $subParagraph = explode(".", $paragraph);
        for ($i = 0; $i < count($subParagraph); $i++) {
            echo "<p>";
            echo $subParagraph[$i];
            echo "</p>";
        }
    ?>
    </div>

    <h2>
    5. Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </h2>

    <?php
        $students = [
            [
                "name" => "Mario",
                "surname" => "Rossi",
                "scores" => [
                    "italiano" => 10,
                    "inglese" => 9,
                    "matematica" => 8
                ]
            ],
            [
                "name" => "Paolo",
                "surname" => "Bianchi",
                "scores" => [
                    "italiano" => 7,
                    "inglese" => 8,
                    "matematica" => 9
                ]
            ],
            [
                "name" => "Luigi",
                "surname" => "Verdi",
                "scores" => [
                    "italiano" => 6,
                    "inglese" => 7,
                    "matematica" => 8
                ]
            ],
            [
                "name" => "Giorgio",
                "surname" => "Neri",
                "scores" => [
                    "italiano" => 5,
                    "inglese" => 6,
                    "matematica" => 7
                ]
            ],
            [
                "name" => "Carlo",
                "surname" => "Bianchi",
                "scores" => [
                    "italiano" => 4,
                    "inglese" => 5,
                    "matematica" => 6
                ]
            ],
            [
                "name" => "Giovanni",
                "surname" => "Rosa",
                "scores" => [
                    "italiano" => 3,
                    "inglese" => 4,
                    "matematica" => 5
                ]
            ],
            [
                "name" => "Alessandro",
                "surname" => "Gialli",
                "scores" => [
                    "italiano" => 2,
                    "inglese" => 3,
                    "matematica" => 4
                ]
            ],
            [
                "name" => "Michele",
                "surname" => "Blu",
                "scores" => [
                    "italiano" => 1,
                    "inglese" => 2,
                    "matematica" => 3
                ]
            ],
        ];
    ?>
    <ul>
        <?php
            for ($i = 0; $i < count($students); $i++) {
                echo "<li>";
                echo $students[$i]["name"] . " " . $students[$i]["surname"] . " " . array_sum($students[$i]["scores"]) / count($students[$i]["scores"]);
                echo "</li>";
            }
        ?>
    </ul>
</body>
</html>