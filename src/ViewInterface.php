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

/**
 * The representation of View.
 */
interface ViewInterface
{
    /**
     * Sets the layout.
     *
     * @param ViewModelInterface $layout The layout
     */
    public function setLayout(ViewModelInterface $layout);

    /**
     * Gets the layout.
     *
     * @return ViewModelInterface The layout
     */
    public function getLayout();

    /**
     * Renders the model.
     *
     * @param ViewModelInterface $model The view model
     *
     * @return string Returns the result of rendering
     */
    public function render(ViewModelInterface $model);
}
