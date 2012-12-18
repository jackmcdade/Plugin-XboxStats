<?php

require_once __DIR__ . '/vendor/XboxStats.class.php';

class Plugin_Xbox_stats extends Plugin
{
    public function index()
    {
        $xbox = new XboxStats;

        return $xbox->setGamertag($this->fetch_param('gamertag'))->getStats();

    }
}