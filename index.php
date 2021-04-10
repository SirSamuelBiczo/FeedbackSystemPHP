<!DOCTYPE html>
<html lang="fr"
    <head>
        <title>Système de commentaire produit PHP</title>
        <meta charset="utf-8">

        <!-- CDN FontAwesome pour les étoiles lors du feedback -->
        <link rel="stylesheet" href="feedback.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>

    <body>
    <?php
    include 'Feedback.php';


    $name = "Samuel";
    $nationality = "FR";
    $date = Date('d/m/Y');
    $feedback_text = "C'est un superbe produits...";
    $feedback_value = 5;
    $feedback_photos = 'https://images.loox.io/uploads/2021/4/7/41xpnemvSc.jpg';


    $feedback = new Feedback($name, $nationality, $date, $feedback_text, $feedback_value, $feedback_photos);
    Feedback::GenerateTemplate($feedback);
    $feedback = new Feedback($name, $nationality, $date, $feedback_text, $feedback_value);



    ?>
    </body>
</html>

