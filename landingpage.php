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

      Background:<a target="_blank" href="https://edermunizz.itch.io/free-pixel-art-forest">Pixel art forest</a> After i have
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
      Day seven
      Today i tried implementing raycasting to the game which is working, but for some reason the character is falling through the ground and i can't seem to figure out why, so for today i will be abandoning that problem and i will start working on the website for the game
      Yoinked registration form from https://mdbootstrap.com/docs/standard/extended/registration/
      I spent most of today working on the website further documentation can be read on
      https://github.com/godoistvan/Endless-Runner-Web/commits/main

      Day eight
      Today i did some adjusments to the code that's supposed to detect the ground but it seems to bit a bit buggy, it decets where the ground is and allows the player to jump,but the player is glitching through the ground.
      I created another project just to test the code and it's working as intended it seems like the main project ground and the character shape doesn't really like eachother resulting in the player falling thourgh the ground, will look into fixing the problem
      Day nine
      Today i fixed the groundheight problem groundheight is now correctly calculated based on the platform's height it has been a long standing problem and held back the development significantly i'm happy that its now gone
      Started working on the menu the background that im currently using can be found on https://assetstore.unity.com/packages/2d/textures-materials/red-cliff-background-147959
      I created the menu but its currently not working because i have to implement scenes before. I look into how to do that and continue later on
      Day Ten
      Today i had limited time to work on my project so no mutch progress has ben done but i've spotted that groundheight problem is not entirely solved yet,on the other hand i fixed the menu and its kind of working already but i have to fix the switch between the scenes will work on it tomorrow
      Day Eleven&Day twelve
      Disclaimer:I'm documenting day eleven and day twelve in the same paragraph because of the small amount of work done on day eleven
      A test scene was set up where every new addition to the game will be tested first, so if something goes wrong it wont have "permanent" consequences.
      Also the groundheight problem is now fully functional but there is a minor bug, if the player doesn't press the jump button he will never fall therefore he will never die either causing the player to get points infinitely.
      The UI elements for the spells were setup today but will require actual images of the spells, now placeholders are used.
      Day thirteen
      Today i added a projectile to the game which is shot from the wizard characters staff with either the Q or the left click button.Also i implemented the first enemy to the game a skeleton archer who doesn't have an attack script yet but has 100 health, im planning on increasing the enemies health after every boss fight (every 1000 points).
      https://www.youtube.com/watch?v=wkKsl1Mfp5M
      Day fourteen
      Today i finished the implementation of the remaining two spells, W which spawns a wall of ice and E which spawns an explosion at the cursor the plan is to make the explosion blow things away but that is yet to be impelemented.Also i added a cooldown system to the game as of now the cooldown on q is 0.5s cooldown on w is 10s cooldown on e is 5s
      https://www.youtube.com/watch?v=JfCX612PbAY

      Day fifteen
      Today i fixed a previous bug that prevented enemies from getting hit by spells therefore making them unkillable,also i made a coinpack prefab that will spawn when an enemy is killed.The plan for now is to make the coins fly towards the player like the player had a magnet attached to him.Also i implemented a bonus enemy which is a flying ghost that will sometimes spawn in the air, killing it will yield the player 10 coin.

      https://pixerat.itch.io/round-ghost
      Day sixteen
      Today i spent my time doing minor bugfixes such as fixing the coin spawnpoint,fixing the parallax movement of the platforms and i came to the conclusion that the depth of the platform's should be set to 2 for optimal player experience.
      Day seventeen
      Today i added playerlifes to the game as of now the player has 3 lives and(50 healthpoint=1 life) or falling off the platform counts as -1 life.If a player loses all three of his hearths he is placed on the DeathScene where he is presented with a respawn and quit button.Also the no jump bug and now the player properly falls of the platform even if he doesnt press jump a single time.But another bug emerged,the player model is acting like its having a seizure.
      Day seventeen
      I reworked the shooting system so now the player's Q ability is shot towards the mouse pointer(https://www.reddit.com/r/Unity2D/comments/bb6zjp/how_to_fire_bullet_prefab_towards_mouse/)
      Also i added another type of bonus enemy which carries a hearth as of now it shares the same texture as the mob that drop's coins but on the crate there is a clear distinction.I also added a spawnprotection system which gives the player 5 seconds of immunity after losing a life.Ground collider was adjusted to better fit script, now the script finds the groundheight more accurately.Also a small demo was made for the school showcasing.On top of that the final explosion prefab was added which i found already animated on the unity store.
      Day eighteen
      Today i spent my time working on an easter egg.On the DeathScene when the player clicks the You Died text he will be taken to a new scene where he will get a 500 coin onetime bonus for finding this little secret.Also i added 2 extra collums to the user table in the database issupsended and eastereggclaimed

      
      Day nineteen
      Today i worked on implementing procedural generation for the platforms but ended it up breaking the game and now nothing is spawning, will work on fixing it later.I actually ended up fixing it later today, now the size of the platform on the x axis have to be properly adjusted tho.Enemies now also randomly spawn on the generated platforms
    </div>
  </div>
</body>

</html>