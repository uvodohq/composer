<?php

namespace Uvodo\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/** @package Uvodo\Composer */
class Plugin implements PluginInterface
{
    /** @inheritDoc */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

    /** @inheritDoc */
    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    /** @inheritDoc */
    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
}
