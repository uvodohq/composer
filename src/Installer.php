<?php

namespace Uvodo\Composer;

use Composer\Installer\InstallerInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/** @package Uvodo\Composer */
class Installer extends LibraryInstaller implements InstallerInterface
{
    /** @inheritDoc */
    public function supports(string $packageType)
    {
        $supported = [
            'uvodo-plugin',
            'uvodo-theme',
        ];

        return in_array($packageType, $supported);
    }

    /** @inheritDoc */
    public function getInstallPath(PackageInterface $package)
    {
        return 'custom/plugins/' . $package->getPrettyName();
    }
}
