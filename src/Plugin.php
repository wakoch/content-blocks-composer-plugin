<?php declare(strict_types=1);

/*
 * This file is part of the package sci/content-blocks-composer-plugin.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Sci\ContentBlocksComposerPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Sci\ContentBlocksComposerPlugin\Installer\ContentBlockInstaller;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $composer
            ->getInstallationManager()
            ->addInstaller(
                new ContentBlockInstaller($io, $composer)
            );
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
}