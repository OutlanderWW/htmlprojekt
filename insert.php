<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <?php
    include "db-connection.php";
    if(isset($_POST['submit']) && !empty($_POST['submit']))
    {
        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $email=$_POST['email'];
    
        $insert=mysqli_query($db, "INSERT INTO `wiadomości` (`imie`,`nazwisko`, `email`) VALUES('$imie','$nazwisko','$email')");
    if(!$insert)
    {
        printf("Wystąpił błąd: %s\n", mysqli_error($link));
    }
    else
    {
        echo "Twoja wiadomość została wysłana";
    }
    }
    else
    {
        echo "Brak danych w formularzu";
    }
    mysqli_close($db)
    ?>
    </section>
</body>
</html>