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
 * The interface for the Collection of view helpers.
 */
interface ViewHelpersInterface extends ServiceLocatorInterface
{
    /**
     * Gets the helper and sets its options.
     *
     * @param string $name    The helper name
     * @param array  $options Optional; the helper options
     *
     * @return mixed The requested helper
     */
    public function getHelper($name, array $options = []);

    /**
     * Merges with other view helpers.
     *
     * @param ViewHelpersInterface $source The data source
     *
     * @return self
     */
    public function merge(ViewHelpersInterface $source);
}
