<?php

namespace rvtraveller\QuicksilverComposerInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class QuicksilverComposerInstaller extends LibraryInstaller
{

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'quicksilver-module' === $packageType;
  }

}
