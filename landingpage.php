<?php
require_once 'includes/navbarheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>

</head>
<body>
<div class="row">
    <div class="col-md-6">
      <h1>Játék leírása magyarul</h1>
        Egy 2D endless runner játékot szeretnék fejleszteni ahol a játékosnak a
        célja az,hogy minnél messzebb jusson el a játékba amit mindenféle
        akadályok és ellenfelek próbálnak megakadályozni.A játékos alapból 3
        élettel kezdene,és hogyha 1 élete elfogy a pályán random megjelenik egy
        szív amit felvéve visszakaphat egy életet.A projekthez egy olyan
        adatbázist tudnék elképzelni ami a játékosok rekordjait rangsorolja,vagy
        a játékbol különböző stasztikákat ment el ilyen lehet pl: átlagos
        megtett távolsag, vagy legtöbb összegyüjtött szív stb. Az alapötlet ez
        volt viszont ehhez jön még pár twist,hogy egyedi legyen a játék. Azt
        gondoltam hogy különböző classokkal játszhatnának a játékosok amik 3
        különböző alapképességel rendelkeznek illetve mindegyik class ugyan
        azzal a 4. képességel rendelkezne amit a bossok legyőzése után kap meg
        ami 1000 pontonként spawnolna. Az elképzelés az,hogy ezek a unique
        bossok egyedi témát képviselnének és ahhoz képest adnának egy egyszer
        használatos 4. spellt.Például Time Lord boss adna egy olyan 4 képességet
        ami “előre visz az időben” 20 secet ami mondjuk 200 pont, és az összes
        objektívet amit ezalatt a 200 pont alatt otthagytál megkapod,coinok
        daily reward,bónusz szív stb. Az classok spelljei egy előremeghatározott
        sémát követnek Spell: offense értsd sebző attack pl lövés stb..
        Spell:defense értsd bármiféle képesség ami megvéd valamitöl pl egy
        shield vagy ilyesmi Spell:utility értsd olyan spell ami az előző két
        kategóriába nem sorolható bele de segíti az előrehaladást. Első
        játszható class amire gondoltam az a Wizard Ennek az első spellje egy
        basic attack lenne pl egy fireball Második spellje egy fal lenne amit
        több féle képpen tudna használni, pl föl tudna ugrani vele magasabb
        pontokra,lerakhatja a játékos amiatt is hogy az ellenséget
        megakádolyazza abba hogy attackolja Harmadik spellje egy lökés lenne
        amit rangeből tud castolni ezzel el tudná lökni az enemyket pl hogyha
        úgy spawnol a map hogy az enemy mögött egy lyuk van bele tudná lökni
        ezzel hatástalanítani tudná,illetve egy cool use amire gondoltam az
        az,hogy a falat el tudná vele lökni és ha a fal hozzá csapódik egy
        enemyhez az instant megöli Továbbá a utility spellel a játékos tudna egy
        tf2 szerű rocket jumpot is tolni hogyha arra van szüksége Problémák amik
        előjöhetnek fejlesztés közben és balanceolni/reworkolni kell: Ha nincs
        mana vagy cooldown a spelleken ami elég punishing a játékos csak
        spammelheti a defense és a utility spell combot arra,hogy oneshotoljon
        minden enemy és emiatt a játékos offensive spellje teljesen értelmetlen
        lenne.
      
    </div>
    <div class="col-md-6">
      <h1>Teljes dokumentáció angolul</h1>
        <h3>Day one:</h3>As i was only getting started with unity i spent most of time
        watching tutorials and reading documentations to get a bit more familiar
        with unity.Also i was looking for sprites Tileset: Wizard:
      
        Background:<a  target="_blank"href="https://edermunizz.itch.io/free-pixel-art-forest">Pixel art forest</a> After i have
        downloaded all the necessary sprites i worked on animating the wizard
        class movements <h3>Day two</h3>Today i also spent most of my time watching
        tutorials and reading documentations,but also i wrote my first script!
        And also created my first prefab i'm pretty satisfied with my progress
        so far. Also today i searched for a coin asset which i found at
        <a target="_blank" href="https://opengameart.org/content/2d-coin">Coin</a> After that i spent a little bit
        of time animating it and also i started to create the first scene I
        ended up finishing day two with finding the assets for the meele and the
        ranged enemies<a target="_blank" href="https://opengameart.org/content/skeleton-archer-0">Archer</a>&
        <a target="_blank" href="https://opengameart.org/content/skeleton-warrior-2">Warrior</a>
        <h3>Day three</h3>
        Today i started off strong with finally implementing player movement,but
        for now it's a bit clunky and our player model sometimes falls over
        after jumping??? I will start debugging it soon
        <a target="_blank" href="https://www.youtube.com/watch?v=dNJk_NA3nPE">https://www.youtube.com/watch?v=dNJk_NA3nPE</a> I finished off the day with
        implementing auto run for the game but for some reason the character
        can't jump while it's running tomorrow i will work on implementing a
        bugfix for this issue <h3>Day four</h3> Today after way too much time i figured
        out that the character's collider is not touching the grounds collider
        and because of that the character is not able to jump. I kind of
        abandoned that issue for now and currently im focusing on creating
        prefabs that i will generate in a random order later <h3>Day five</h3> Today i
        spent very little time working on the project because i was busy doing
        homework,but i rewrote the jump from scratch and now it seems to be
        working flawlessly,tomorrow i will work on implementing player movement
        <h3>Day six</h3> It's day six and to me it seems like the player movement is
        working just fine and the parallax background i found is sort of
        working? But i will need to do a bit of debugging because the layers
        doesn't seem to reappear in the correct order The new background:
        <a target="_blank" href="https://vnitti.itch.io/grassy-mountains-parallax-background">background</a>
        <h3><a target="_blank" href="https://www.youtube.com/watch?v=rNvdYig7AR0">Demo video</a></h3>
    </div>
  </div>
</body>
</html>