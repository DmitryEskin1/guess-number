<?php

namespace DmitryEskin1\guess_number\Controller;
use function DmitryEskin1\guess_number\View\showGame;

function startGame()
{
   echo "Game started" .PHP_EOL;
   showGame();
}
