<?php

require_once('vendor/autoload.php');

# COMPOSITE

use \Src\Structural\Composite\Song;
use \Src\Structural\Composite\Playlist;

$songOne = new Song("Sweet Child O' Mine");
$songTwo = new Song("War Pigs");
$songThree = new Song("Pride and Joy");
$songFour = new Song("Natural");

$myFavouriteSongs = new Playlist();
$myFavouriteSongs->addSong($songOne);
$myFavouriteSongs->addSong($songTwo);
$myFavouriteSongs->addSong($songThree);
$myFavouriteSongs->addSong($songFour);

$myFavouriteSongs->play();
