<?php

namespace DmitryEskin1\guess_number\Controller;

use function DmitryEskin1\guess_number\Model\setting;
use function DmitryEskin1\guess_number\View\MenuGame;
use function DmitryEskin1\guess_number\DB\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
