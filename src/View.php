<?php

    namespace DmitryEskin1\guess_number\View;

    use function DmitryEskin1\guess_number\Controller\showGame;
    use function DmitryEskin1\guess_number\Controller\saySalute;
    use function DmitryEskin1\guess_number\Controller\setting;

function startGame()
{
    echo "Game shown" . PHP_EOL;
    setting();
    saySalute();
    showGame();
}

function showList()
{
    echo "List all saved games from DB \n";
}

function showReplays()
{
    echo "Replay all moves from the game wit ID \n";
}

function showTopRating()
{
    echo "Show stats for players form DB \n";
}
