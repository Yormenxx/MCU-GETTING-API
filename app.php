<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch =  curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result,true);

curl_close($ch);



?>

<head>
    <title>La proxima pelicula</title>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>

<h2 style="text-align:center;">La proxima pelicula de marvel</h2>
    <section>
      
        <img src="<?= $data["poster_url"];?>" width="250" alt="poster de <?= $data["title"]?>" style="border-radius: 20px;">

        <div>
                <h3><?= $data["title"];?> Se estrena en <?= $data["days_until"]; ?> dias</h3>
                <p>Sinopsis: <?= $data["overview"]?></p>
                <p>Tipo: <?= $data["type"]?></p>
                <p>Fecha de estreno: <?= $data["release_date"]?></p>
                <p>La siguiente pelicula es: <?= $data["following_production"]["title"]?></p>
        </div>
    </section>
  
</main>

<style>

    section{

        width: 100%;
        display:flex;
        justify-content: center;
        align-items: center;
        column-gap: 10px;
        margin-top: 50px;
    }

    img{
        margin: 0 auto;
    }


</style>