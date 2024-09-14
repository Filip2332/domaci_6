<?php

$korisnici = [
    "Marko",
    "Matej",
    "Jovan"
];

if (isset($_POST["ime"]) && !empty(trim($_POST["ime"]))) {
    $unesenoIme = trim($_POST["ime"]);
    if (strlen($unesenoIme) < 3) {
        die("Ime je prekratko!");
    }

    $korisniciLower = array_map("strtolower", $korisnici);
    if (in_array(strtolower($unesenoIme), $korisniciLower)) {
        echo "Korisnik $unesenoIme je pronadjen!";
    } else {
        die("Korisnik nije pronadjen!");
    }
} else {
    die("Ime nije uneto!");
}