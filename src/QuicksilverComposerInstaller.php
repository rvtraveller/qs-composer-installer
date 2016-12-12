<?php

namespace rvtraveller\QuicksilverComposerInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class QuicksilverComposerInstaller extends LibraryInstaller
{

  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package) {
    return 'private/quicksilver/' . $package->getPrettyName();
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
  	var_dump("PACKAGE TYPE: " . $packageType);
    return 'quicksilver-module' === $packageType;
  }

}
