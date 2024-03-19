<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Php</title>
</head>
<body>
    
    <!-- cara menulis syntax php dalam html. -->
    <?php
        echo "Hello World!";
    ?>

    <!-- penulisan echo juga harus dalam huruf kecil tidak boleh berbeda dan tidak boleh kapital atau code tidak akan berjalan. -->
    <?php
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
    ?>

    <!-- penulisan untuk pengambilan nilai dalam variabel juga tidak boleh berbeda hurufnya dengan variabel yg sudah tertera. -->
    <?php
    $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
    ?>

</body>
</html>