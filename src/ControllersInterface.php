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
 * The interface for the Collection of controllers.
 */
interface ControllersInterface extends ServiceLocatorInterface
{
    /**
     * Merges with other controllers.
     *
     * @param ControllersInterface $source The data source
     *
     * @return self
     */
    public function merge(ControllersInterface $source);
}
