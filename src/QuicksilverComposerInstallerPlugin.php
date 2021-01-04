<?php

namespace rvtraveller\QuicksilverComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class QuicksilverComposerInstallerPlugin implements PluginInterface
{
  private $installer;

  public function activate(Composer $composer, IOInterface $io)
  {
    // Strange autoloading problem on CircleCI
    if (!class_exists(QuickSilverComposerInstaller::class)) {
      include_once __DIR__ . '/QuicksilverComposerInstaller.php';
    }
    $this->installer = new QuickSilverComposerInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($this->installer);
  }

  public function deactivate(Composer $composer, IOInterface $io)
  {
    $composer->getInstallationManager()->removeInstaller($this->installer);
  }

  public function uninstall(Composer $composer, IOInterface $io)
  {
  }
}
