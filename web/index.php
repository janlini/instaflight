<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            label  {display: block;}
        </style>
    </head>
    <body>
        <form method="get" action="verarbeitung.php">
            <p>
                <label for ="vorname">Vorname</label>
                <input type="text" name="vorname" id="vorname">
            </p>
            <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            </p>
            <input type ="submit">
        </form>   
        <?php
        echo "<br>";
        $obst = array ("Banane", "Apfel", "Birne");
        echo $obst [0];
        $obst [] = "Orange";
        echo "<br>";
        echo "<ul>";
        foreach ($obst as $t) {
            echo "<li>$t</li>\n";
        }
        echo "</ul>";
        $bilder = [ "cliff",
                    "italia",
                    "muschel",
                    "sea",
                    "Strand",
                    "Sunset",
                    "swim",
                    "vogel"];
        $max =count($bilder) -1;
        $random = rand(0,$max);
        echo "images/$bilder[$random].jpg";
        echo "<img src='images/$bilder[$random].jpg' >";
        ?>
    </body>
</html>