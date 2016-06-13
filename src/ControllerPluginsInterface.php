<?php
/**
 * This file is part of the "Easy System" package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Damon Smith <damon.easy.system@gmail.com>
 */
namespace Es\Mvc;

use Es\Services\ServiceLocatorInterface;

/**
 * The interface for the Collection of controller plugins.
 */
interface ControllerPluginsInterface extends ServiceLocatorInterface
{
    /**
     * Gets the plugin and sets its options.
     *
     * @param string $name    The plugin name
     * @param array  $options Optional; the plugin options
     *
     * @return mixed The requested plugin
     */
    public function getPlugin($name, array $options = []);

    /**
     * Merges with other plugins.
     *
     * @param ControllerPluginsInterface $source The data source
     *
     * @return self
     */
    public function merge(ControllerPluginsInterface $source);
}
