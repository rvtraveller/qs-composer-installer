<?php

namespace rvtraveller\QuicksilverComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class QuicksilverComposerInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new QuickSilverComposerInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
