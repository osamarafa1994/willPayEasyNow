<?php

namespace OArafa\WillPayEasyNow;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Payment implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $io->write("Will Pay Easy Now plugin activated.");
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        $io->write("Will Pay Easy Now plugin deactivated.");
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        $io->write("Will Pay Easy Now plugin uninstalled.");
    }
}