<?php
// 1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
// 2. Se è corretta stampare un messaggio di success in un alert di Bootstrap, altrimenti (sempre in un alert di Bootstrap) mostrare un messaggio di errore.
// 
// Milestone 1: scriviamo tutto (logica e layout) in un unico file index.php
// Milestone 2: verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
// Milestone 3: invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione. 
// Milestone 4: invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page.
// Milestone 5: utilizzare $_GET per valorizzare il campo di input in caso il controllo del server dia esito negativo (KO)
?>

<?php
session_start();
// Funzione che restituisce true se l'email contiene chiocciola e punto, false altrimenti
function checkEmail($email) {
    $result = false;
    if (str_contains($email, "@") && str_contains($email, ".")) {
        header("Location: ./success.php");
        $_SESSION["email"] = $email;
        $result = true;
    }
    return $result;
}

$user_email = $_GET["email"] ?? "";
if (!empty($user_email)) {
    $email_is_correct = checkEmail($user_email);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- Se l'email è corretto, allora inserisco alert con success -->
        <!-- Altrimenti Alert con error -->
        <?php if (isset($email_is_correct)) { ?>
            <div class="alert <?php echo $email_is_correct ? "alert-success" : "alert-danger" ?>" role="alert">
                <?php
                if ($email_is_correct) {
                    echo "L'email è corretta";
                } else {
                    echo "l'email non è corretta, controlla!";
                }
                ?>
            </div>
        <?php } ?>
        <form action="index.php" method="GET">
            <label for="email">Email</label>
            <input class="form-control" type="text" id="email" name="email">
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</body>

</html>