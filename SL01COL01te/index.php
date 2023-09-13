<?php

//Dit gedeelte is de naam
$voornaam = "Sam";
$tussenVoegsel = "";
$achterNaam = "Maijer";

//Dit maakt de volle naam op basis van de vorige informatie
$volleNaam = $voornaam;
if($achterNaam != ""){ 
    $volleNaam .= " " . $tussenVoegsel;
}
$volleNaam .= " " . $achterNaam;

//Hier staat de contact informatie
$telefoonNum = 611122233;
$email = "sammayer@testmail.nl";
$githubLink = "github.com/sammayer0815";

//Lijst van programeer talen die persoon kan
$programeerTalen = ["HTML", "CSS", "Javascript", "Java", "Python", "C#", "PHP", "MySQL"];

//Geboorte datum van persoon
$dob = new DateTime('2003-08-15');

$today = new DateTime('today');

//Berekent de leeftijd op basis van geboorte datum + datum vandaag
$age = $dob->diff($today)->y;

//Pakt de current uur
$currentTime = date('H');

//Var voor de achtergrond kleur
$achtergrondKleur = "";

//Kiest de achtergrond kleur via of het vroeger of later dan 12 uur is
if($currentTime < 12    ){
    $achtergrondKleur = "#4f4d47";
}else{
    $achtergrondKleur = "#fbff00";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL01COL01</title>
</head>
<body style="background-color:<?php echo $achtergrondKleur?>">

<h3>Hallo, <?php echo $volleNaam ?></h3>
<h2>Dit is jouw naam</h2>
<ol>
    <li>Voornaam: <?php echo $voornaam?></li>
    <li>Tussenvoegsels: <?php echo $tussenVoegsel?></li>
    <li>Achternaam: <?php echo $achterNaam?></li>
</ol>
<h2>Contact:</h2>
<ol>
    <li>Telefoon: <?php echo $telefoonNum;?></li>
    <li>Email: <?php echo $email;?></li>
    <li>Github: <?php echo $githubLink?></li>
</ol>
<h2>programeerTalen</h2>
<ol>
    <?php foreach($programeerTalen as $taal){echo "<li>". $taal . "</li>";};?>
</ol>
<h2>Het is vandaag <?php echo $today->format('Y-m-d' );?>. Je bent op <?php echo $dob->format('Y-m-d');?> geboren dus je bent <?php echo $age?> jaar oud</h2>
</body>
</html>