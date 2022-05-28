<?php
require_once 'includes/navbarheader.php';
$_SESSION['asd'] = "cucc";
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
  <div class="container">
    <div class="row" style="min-height: 60px;"></div>
    <div class="row">
    <div class="card text-white bg-success mb-3">
  <div class="card-body">
    <h5 class="card-title">Játék leírása magyarul</h5>
    <p class="card-text">Ez a program egy olyan 2D Endless Runner játék, ahol a játékosnak a célja az, hogy minnél messzebb jusson el a játékba, amit mindenféle akadályok és ellenfelek próbálnak megakadályozni. A játékos alapból 150 életerő ponttal kezd, és minden platform legenerálása után van esélye arra, hogy idéződjön egy életet szállitó enemy az égbe annak az ellenségnek a megölésével a játékos 30 életerőt nyerhet vissza. A projekthez van egy olyan weboldal, ami, ami a játékosok rekordjait rangsorolja,
Az alapötlet ez volt viszont ehhez jön még pár twist, hogy egyedi legyen a játék.
Azt gondoltam, hogy különböző classokkal játszhatnának(majd) a játékosok, amik 3 különböző alapképességel rendelkeznek, illetve mindegyik class ugyan azzal a 4. képességel rendelkezne, amit a bossok legyőzése után kap meg amit legyőzhet a játék elkezdése elött. Az elképzelés az, hogy ezek az unique bossok egyedi témát képviselnének és ahhoz képest adnának egy egyszer használatos 4. spellt. Például A MechaGolem boss egyik képességének a „lebútitott” verzióját kapjuk meg ami a klónozás spellje. Leidézzük a MechaGolem-et, ami az egér kurzort követi és megöli az enemyeket, akiket eltalál
Az classok spelljei egy előre meghatározott sémát követnek 
Spell: offense értsd sebző attack pl lövés stb...
Spell: defense értsd bármiféle képesség, ami megvéd valamitől pl egy shield vagy ilyesmi
Spell: utility értsd olyan spell, ami az előző két kategóriába nem sorolható bele, de segíti az előrehaladást.
Első játszható class amire gondoltam az a Wizard
Ennek az első spellje egy basic attack pl egy frostbolt
Második spellje egy fal, amit a játékos arra használhat, hogy le blockoljon ellenséges támadásokat, illetve ellenségekre dobva sebzést okozzon nekik.
Harmadik spellje Az egy sentry az E gomb megnyomása után a sentry lassan a játékos kurzora felé repül és utána 10 másodpercig ott marad, ebben az időtartamban hogyha egy ellenség lespawnol a pályára a sentry az egy lövedéket küld felé, egy kicsivel gyorsabban, mint ahogy az ellenség mozog ezzel garantálva azt, hogy az utoléri őt.Ez a képessége a játékosnak 20 másodperces töltésidővel rendelkezik
A játék progressively nehezebb azért, mert a játékos egyre gyorsabb és késöbb nehezebb kikerülni az ellenség nyilát, mert nem tudunk olyan sokszor ugrani egy platformon, mint korábban
</p>
  </div>
</div>
      <div class="card text-white bg-info mb-3">
        <div class="card-body">
          <h5 class="card-title">Day one</h5>
          <p class="card-text">As i was only getting started with unity i spent most of time watching tutorials and reading documentations to get a bit more familiar with unity.Also i was looking for sprites 

<br>
Wizard: https://craftpix.net/freebies/wizard-character-free-sprite/
<br>
Background:https://edermunizz.itch.io/free-pixel-art-forest
<br>
After i have downloaded all the necessary sprites i worked on animating the wizard class movements</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day two</h5>
          <p class="card-text">Today i also spent most of my time watching tutorials and reading documentations,but also i wrote my first script! And also created my first prefab i'm pretty satisfied with my progress so far.

Also today i searched for a coin asset which i found at https://opengameart.org/content/2d-coin
After that i spent a little bit of time animating it and also i started to create the first scene

I ended up finishing day two with finding the assets for the meele and the ranged enemies
<br>
Archer:https://opengameart.org/content/skeleton-archer-0
<br>
Warrior:https://opengameart.org/content/skeleton-warrior-2
</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day three</h5>
          <p class="card-text">Today i started off strong with finally implementing player movement,but for now it's a bit clunky and our player model sometimes falls over after jumping??? I will start debugging it soon
https://www.youtube.com/watch?v=dNJk_NA3nPE
I finished off the day with implementing auto run for the game but for some reason the character can't jump while it's running tomorrow i will work on implementing a bugfix for this issue</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day four</h5>
          <p class="card-text">Today after way too much time i figured out that the character's collider is not touching the grounds collider and because of that the character is not able to jump.
I kind of abandoned that issue for now and currently im focusing on creating prefabs that i will generate in a random order later</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day five</h5>
          <p class="card-text">Today i spent very little time working on the project because i was busy doing homework,but i rewrote the jump from scratch and now it seems to be working flawlessly,tomorrow i will work on implementing player movement</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day six</h5>
          <p class="card-text">It's day six and to me it seems like the player movement is working just fine and the parallax background i found is sort of working? But i will need to do a bit of debugging because the layers doesn't seem to reappear in the correct order
The new background: https://vnitti.itch.io/grassy-mountains-parallax-background</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day seven</h5>
          <p class="card-text">Today i tried implementing raycasting to the game which is working, but for some reason the character is falling through the ground and i can't seem to figure out why, so for today i will be abandoning that problem and i will  start working on the website for the game
Yoinked registration form from https://mdbootstrap.com/docs/standard/extended/registration/
I spent most of today working on the website further documentation can be read on 
https://github.com/godoistvan/Endless-Runner-Web/commits/main</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day eight</h5>
          <p class="card-text">Today i did some adjusments to the code that's supposed to detect the ground but it seems to bit a bit buggy, it decets where the ground is and allows the player to jump,but the player is glitching through the ground.
I created another project just to test the code and it's working as intended it seems like the main project ground and the character shape doesn't really like eachother resulting in the player falling thourgh the ground, will look into fixing the problem</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day nine</h5>
          <p class="card-text">Today i fixed the groundheight problem groundheight is now correctly calculated based on the platform's height it has been a long standing problem and held back the development significantly i'm happy that its now gone
Started working on the menu the background that im currently using can be found on https://assetstore.unity.com/packages/2d/textures-materials/red-cliff-background-147959
I created the menu but its currently not working because i have to implement scenes before. I look into how to do that and continue later on</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day ten</h5>
          <p class="card-text">Today i had limited time to work on my project so no mutch progress has ben done but i've spotted that groundheight problem is not entirely solved yet,on the other hand i fixed the menu and its kind of working already but i have to fix the switch between the scenes will work on it tomorrow</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day ten</h5>
          <p class="card-text">Today i had limited time to work on my project so no mutch progress has ben done but i've spotted that groundheight problem is not entirely solved yet,on the other hand i fixed the menu and its kind of working already but i have to fix the switch between the scenes will work on it tomorrow</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day Eleven&Day twelve</h5>
          <p class="card-text">Disclaimer:I'm documenting day eleven and day twelve in the same paragraph because of the small amount of work done on day eleven
A test scene was set up where every new addition to the game will be tested first, so if something goes wrong it wont have "permanent" consequences.
Also the groundheight problem is now fully functional but there is a minor bug, if the player doesn't press the jump button he will never fall therefore he will never die either causing the player to get points infinitely.
The UI elements for the spells were setup today but will require actual images  of the spells, now placeholders are used.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirteen</h5>
          <p class="card-text">Today i added a projectile to the game which is shot from the wizard characters staff with either the Q or the left click button.Also i implemented the first enemy to the game a skeleton archer who doesn't have an attack  script yet but has 100 health, im planning on increasing the enemies health after every boss fight (every 1000 points).
https://www.youtube.com/watch?v=wkKsl1Mfp5M</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fourteen </h5>
          <p class="card-text">Today i finished the implementation of the remaining two spells, W which spawns a wall of ice and E which spawns an explosion at the cursor the plan is to make the explosion blow things away but that is yet to be impelemented.Also i added a cooldown system to the game as of now the cooldown on q is 0.5s cooldown on w is 10s cooldown on e is 5s
https://www.youtube.com/watch?v=JfCX612PbAY</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fifteen</h5>
          <p class="card-text">Today i fixed a previous bug that prevented enemies from getting hit by spells therefore making them unkillable,also i made a coinpack prefab that will spawn when an enemy is killed.The plan for now is to make the coins fly towards the player like the player had a magnet attached to him.Also i implemented a bonus enemy which is a flying ghost that will sometimes spawn in the air, killing it will yield the player 10 coin.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day sixteen</h5>
          <p class="card-text">Today i spent my time doing minor bugfixes such as fixing the coin spawnpoint,fixing the parallax movement of the platforms and i came to the conclusion that the depth of the platform's should be set to 2 for optimal player experience.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day seventeen</h5>
          <p class="card-text">Today i added playerlifes to the game as of now the player has 3 lives and(50 healthpoint=1 life) or falling off the platform counts as -1 life.If a player loses all three of his hearths he is placed on the DeathScene where he is presented with a respawn and quit button.Also the no jump bug and now the player properly falls of the platform even if he doesnt press jump a single time.But another bug emerged,the player model is acting like its having a seizure.
          I reworked the shooting system so now the player's Q ability is shot towards the mouse pointer(https://www.reddit.com/r/Unity2D/comments/bb6zjp/how_to_fire_bullet_prefab_towards_mouse/)
Also i added another type of bonus enemy which  carries a hearth as of now it shares the same texture as the mob that drop's coins but on the crate there is a clear distinction.I also added a spawnprotection system which gives the player 5 seconds of immunity after losing a life.Ground collider was adjusted to better fit script, now the script finds the groundheight more accurately.Also a small demo was made for the school showcasing.On top of that the final explosion prefab was added which i found already animated on the unity store.
          </p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day eighteen</h5>
          <p class="card-text">Today i spent my time working on an easter egg.On the DeathScene when the player clicks the You Died text he will be taken to a new scene where he will get a 500 coin onetime bonus for finding this little secret.Also i added 2 extra collums to the user table in the database issupsended and eastereggclaimed
</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day nineteen</h5>
          <p class="card-text">Today i worked on implementing procedural generation for the platforms but ended it up breaking the game and now nothing is spawning, will work on fixing it later.I actually ended up fixing it later today, now the size of the platform on the x axis have to be properly adjusted tho.Enemies now also randomly spawn on the generated platforms</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twenty</h5>
          <p class="card-text">I implemented a temporary fix for the first->second platform distance.Will have to fix it later in code tho.I messed around with the partical system and implemented a coin particle on the easteregg scene.Also tried implementing a UI element to show the cooldowns on the spells,bit it will need a bit more work.I also implemented a coin counter under the distancetext element.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentyone</h5>
          <p class="card-text">Today i tried implementing the login form to unity,but it doesn't seem to work because the input field's content doesnt save as a string will fix later.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentytwo</h5>
          <p class="card-text">Today i rewrote the  login script because it turned out the last script was outdated and unity was no longer supporting the API,now the player can login but there is a slight problem.The API always gives back succces eventhought the user doesnt exist, i iwll work on fixing it later.Also i started working on making the ranged enemy attack the player when it's in range.Ranged enemies are now functional (kind of) and shoot the arrow which is for some reason pointing down</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentythree</h5>
          <p class="card-text">Today i fixed the arrow position spawn and it's currently pointing towards the left, and not towards the player small fix is required will work on </p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentyfour</h5>
          <p class="card-text">Today i started collecting boss assets to implement later on
            <br>

https://jose-moyano.itch.io/evil-tree-pixel-art
<br>
https://darkpixel-kronovi.itch.io/mecha-golem-free
I sliced up the sprite sheet so i can work with the assets,and also created the animations for the sprites.I also created a new scene where i impelemented  the boss with his animations and i wrote a new playerscript which ressembles a platformer player script for the boss fight because i think it will make it more interesting if the player can move around.The boss now attempts to follow the player on the X axis only and i implemented its first spell which spawns 5 clones of itself</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentyfive</h5>
          <p class="card-text">Today i started working on implemeting the laser mechanic to the golem boss.
The boss's laser mechanic is almost finalized, but for whatever reason it's not destroying itself when the critearies are met i'll have to look into it later.The boss now shoots basic projectiles on a 5 second cd with a speed of 10.after balancing it a little bit i came to the conclusion that these numbers will suite the game perfectly.Tweaked the boss movement speed a bit so it can no longer catch up to the player easily.I worked on the laser not despawning properly fix, i made it so it despawns after 5 seconds that should be enough time to make a full rotation on the map..</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentysix</h5>
          <p class="card-text">Today i rewrote the logic behind the laser,now it sweeps through the map from one side to the other and if it collides with the player it gets destroyed and the player takes 50 damage.Now the "impact" spell of the boss is almost functional will need a couple of tweaks and the boss is ready for release</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentyseven</h5>
          <p class="card-text">Today i wrote a new script for the flying enemies on the main scene and made it so it has a 2% chance of spawning each time a platform is generated.Also i created an array that holds all the decoration elemnts for the ground script and i will make it so 1-4 random decoration elements spawn on each ground to make the game more vibrant.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentyeight</h5>
          <p class="card-text">Today i made it so the decorations move to the left after being instantiated but i have to figure out how the make them equally as fast as the platform, will work on that later.Also they get destroyed when they leave the player's view.I've been working for like an hour now and i finally fixed the problem,they  now move with the same speed as the platform and they get properly deleted so its kind of optimized aswell.Meanwhile i made a script for the coins, now the coins get sucked in to the player when they get instantiated thus giving the player more currency.I rewrote the logic behind the spawning of decoration on the platforms because of the height difference between assets they have to be handled individually so some of the assets have to be offset on the y axis with a bigger value than others.Also cleaned up the code a little bit</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day twentynine</h5>
          <p class="card-text">Today i started working on finalizing the abilities off the boss.I rewrote the script for the laser if it collides icewall it gets destroyed with the icewall and also if it collides with the player the player takes 30  damage and the laser gets destroyed aswell.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirty</h5>
          <p class="card-text">Today i started bugfixing all the little problems the game have starting with the groundheight problem on the main scene. Which is yet to be fixed as of now but im working on it.On the side i dig into the iEnumerator and Coroutine side of unity and i made the impact ability of the boss work pretty smoothly.I edited the script for the clones a little bit, the clones are now able to die and also when they collide with the player the player takes damage.The MechaGolem is now taking damage aswell and is able to die after 20 shots.It's a couple hours after my previous comment,i  have finally added the player animations (attack,run,jump) to the game it's kind of clunky now will fix it later.Also fix the parallaxing background now there is not an empty void if the last layer gets out of the players view.Also i tried to make the cointext to work but as of now it doesn't count past the first coin.i Also made it so the player's Q spell get destroyed after 2 seconds for optimization or if it collides with the ground
          <br>
          Candidate for new projectiles
https://kicked-in-teeth.itch.io/projectiles
<br>
Particle pack
https://assetstore.unity.com/packages/vfx/particles/spells/48-particle-effect-pack-13998</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtyone</h5>
          <p class="card-text">Today i fixed the longest standing bug of this project finally.The player now walks on the top of the platform instead of everywhere else.Also fixed the problem with impact spell on the boss now when the boss find's the player it hits the ground and then goes back to the correct y position on the same x axis but after that he doesn't move ever again,will work on fixing it later.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtytwo</h5>
          <p class="card-text">Today i changed a couple of settings on the BossPlayer's rigidbody 2D component which blocked the player from jumping, i also added a fancy deatheffect to the MechaGolem boss.A  health bar was added to for the player and the boss.When the target gets hit the color changes depending on its hp value the more hp the target has the more green-ish the color of the healtbar will be the lower the target's hp the more red the healthbar will be.Player animations were also added to the boss fight scene.The UI for the player's spell were also implemented to the  boss fight scene thus finalising this scene.I made it so when the player dies he gets ported to the DeathScene the same way he would if he died in the normal mode.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtythree</h5>
          <p class="card-text">I started today off with making the walls on the side of the boss scene invisible,but made it so the player can still collide with it resulting in a knockback.I tried fixing that caused the boss to stop moving if the player dodged to the side the same time when the boss tried to cast impact.The icewall object has now been give a behavior script it automatically gets destroyed after 3 seconds, or if the player presses W again.Also it's been given a health value and if that goes to 0 it gets destroyed.A new bug just appeared, if the laser in the start function spawns on the left then it will only be available to be spawned on that side, if it spawns on the right side it refuses to move an inch.On the main scene i made a new spawn platform with a custom SpawnGround behavior this platform is long enough to ensure that the first platform clone doesn't spawn at an impossible distance from the player.I tweaked the platforms wideness a little bit and i also made it so the platform's can spawn a bit further away from one another making the game harder and more aesthetically pleasing.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtyfour</h5>
          <p class="card-text">Today i started making a couple particle affects for my game to meet modern standards better,first i added a cloud particle that spawns after the player jumps.I also downloaded a rain and snow particle effect which works in the scene view but for some reason doesn't show up in the play view https://assetstore.unity.com/packages/vfx/particles/environment/pixel-weather-particles-148577.I also added a trail to the player's Q spell to make it look cooler,and i also added a particle effect to the W spell when it collides with the ground and last but not least i added a particle effect to the Q spell when it collides with anything</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtyfive</h5>
          <p class="card-text">I started today off with fixing the firepoint of the player because it was shooting from the players knee after i previously adjusted the player model to be above groundheight at all times.I also seemingly fixed the problem with the bosses impact spell.I also  changed it so the laser chooses side randomly and it no longer spawns on the further side from the player.But as of now there is still a bug the laser is only able to move from the side where it was first instantiated.It's a bit later in the day and now i've fixed the bug that prevented the laser from nowing,now the laser is following on the player on the x axis only similiar to the bosses movement,this marks the completion of the boss.I made a scene for the occasion when the player dies on the boss scene which has a respawn and a quit button.And i also made a scene for when the player kills the boss.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtysix</h5>
          <p class="card-text">Today i started finalizing the endless runner mode of the game,starting with adding a rigidbody and a box collider to the player so it can collide with enemy projectilese,but it broke the game instantly causing to player not to fall at all unless they press the jump button.I'll work on fixing it later.I also changed the ground script a bit and now the platform's have a 20% chance to be instantiated with an enemy on it.There was a bug that caused the enemies to shoot in a different direction from the player that has been fixed.The bug with the collider has been fixed.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtyseven</h5>
          <p class="card-text">I started today off with fixing a bug that caused the player's bullet to fly right through the boss and all the clones.I also changed the cooldown of the boss's shoot ability so it has a bigger rate of fire now.Background music was added to the boss scene althought it might change in the future.I also added a background music to all 3 scenes.I added two text fields to the player death scene,now if the player dies it displays he's highscore and also the score of the current run.I started working on a bug that causes decoration to appear later than the paltform itself,but the solution is yet to be found.
Menu music:https://www.youtube.com/watch?v=PbzLWj-yyeM	
Background music for the game:https://www.youtube.com/watch?v=yHDLbdT4Z1Q</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day thirtyeight</h5>
          <p class="card-text">Today i found the bug that caused the decoration to be spawned after the next platform was generated.Also after complaint from my friends i decided to change out the songs in the game
Music for the game:https://www.youtube.com/watch?v=5bn3Jmvep1k
Music for the menu:https://www.youtube.com/watch?v=uWILfcPIyto
Its now day thirtyeight but im documenting these 2 days together because i only had limited time yesterday to work on the game so im doing the finishing touches today.I made it so the enemy spawns correctly on the platform but as of now he's shooting in the opposite direction i'll fix it soon.I also changed the collision detection of the two flying enemies so they can collide with the players bullet again.A previous feature made this bug out and not work at all.Now everything should work correctly.I made a particle effect when the boss hits the ground with the impact ability.Now the bug previously mentioned is fixed the arrow now moves towards the player,but now anothe problem arose, it doesn't get destroyed when it collides with the player</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day forty</h5>
          <p class="card-text">Today implemented the 3rd spell into the game.It is a sentry which is shot from the player's position to the players cursor position.When it has reached it's destination it has a lifetime of 5 seconds in which it spawn projectiles which will instantly fly towards enemy targets whenever they spawn.I also fixed an issue that caused the players q ability to blow up the instance it was spawned.I made a new easter egg scene which will be accesible once the player kills the MechaGolem boss and shoots down the coin that spawn at a random position within the camera in easteregg scene the player has a 15 second timer to pick up as much coin as he can.I adjusted the decoration spawning script it can no longer spawn randomly in the sky.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fortyone</h5>
          <p class="card-text">I started today off with finalizing the Enemy AI now it shoots towards the player with i would say like 70% percent of the time.I also started making a new raycast that would function as a line in front of the player and if that collides with the arrow the player takes damage.Also added a particle effect for damagetaken.I made a text that appears over the player's head when he's immune to damage and dissapears when he's no longer immune.I debugged the sentry spell for the player it's now working as intended it spawn projectiles whenever an enemy is detected on the scene.I fixed a bug that caused the icewall to fall through the platforms.I went back to the boxcollider solution that i wanted to do a couple days back it turned out to be a better solution than the raycasting one and its now working correctly aswell.Now the last thing i have to do is to make the Enemy's aim better.Implemented the feature that allows the player to shoot out the enemy's arrow destroying it immediately.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fortytwo</h5>
          <p class="card-text">I re added the player damagetaken animation after it somehow dissapeared yday.Also a bug that caused the healthbar to not show sometimes.Added a deatheffect for the boss.Also the bosses healthbar dissapears when it dies.Also added a shootinga amination for the archer enemy.If the enemy's arrow hits the ground it now lose half of its momentum,also if the player's bullet collides with enemy's arrow the arrow gets destroyed.I tweaked the health bonus enemy spawnrate a bit,now if the player has less than half of its hp the mob has 10% chance to spawn otherwise it has a 5% chance (previously it had 1% percent on all health percentages).I also adjusted the enemy spawnrate after this change to 40%.I also made it so the player gets 10 health whenever he kills an enemy.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fortythree</h5>
          <p class="card-text">Today i started scripting the final spell for the player.The final spell i settled on a clone of the boss following the player's cursor destroying the enemies it collides with.I also fixed a bug that caused the player to not gain health after killing an enemy.I also made it so the icewall kill's the enemy if it collides with the enemy but it also takes half of it's hp as damage.Also changed back the boss hp to the normal amount after testing was done.</p>
        </div>
      </div>
      <div class="card text-white bg-info mb-3" >
        <div class="card-body">
          <h5 class="card-title">Day fortyfour</h5>
          <p class="card-text">Today is the final day before i have to turn in the project.I have changed the sprite for all the player spell and also changed the icons for it in the ui.
https://assetstore.unity.com/packages/vfx/particles/spells/52-special-effects-pack-10419
https://nyknck.itch.io/ice-shard
https://pipoya.itch.io/pipoya-free-vfx-warp-portal
https://coloritmic.itch.io/icecool-pack?download 
I also fixed a bug that caused the player's hp to go above its maxhealth.And also fixed a bug that caused the player not to get spawn protection.</p>
        </div>
      </div>
    </div>
</body>

</html>