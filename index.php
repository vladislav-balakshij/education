<?php

interface template
{
    public function run($command);
}

abstract class mainGame{

}

class game extends mainGame implements template {
    public function run($command)
    {
        // TODO: Implement run() method.
    }
}

$game = new game();
asd