<?php
require "vendor/autoload.php";

$faker = Faker\Factory::create('fr_FR');
$faker-> name;
$page = 'test';
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, [
    'cache' => false,
]);

if($page === 'test') {
    echo $twig->render('test.twig', ['personne' => [
        'name' => $faker-> userName,
        'adresse' => $faker-> address,
        'email' => $faker-> email,
        'tel' => $faker-> phoneNumber,
        'company' => $faker-> company,
        'job' => $faker-> jobTitle,
        'number' => $faker-> numberBetween($min = 1, $max = 100),
        'color' => $faker-> colorName,
        'produit' => $faker-> domainWord,
        'phrase' => $faker-> catchPhrase,
        'url' => $faker-> url,
        'image' => $faker-> imageUrl($width = 400, $height = 250),
        'logo' => $faker-> imageUrl($width = 150, $height = 150)

    ]]);
}
?>