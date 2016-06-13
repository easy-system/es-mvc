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

use ArrayAccess;
use Es\Container\Property\PropertyInterface;
use IteratorAggregate;

/**
 * The representation of ViewModel.
 */
interface ViewModelInterface extends ArrayAccess, IteratorAggregate, PropertyInterface
{
    /**
     * Sets the content type.
     *
     * @param string $type The type of content
     *
     * @return self
     */
    public function setContentType($type);

    /**
     * Gets the content type.
     *
     * @return string The type of content
     */
    public function getContentType();

    /**
     * Sets the variables.
     *
     * @param mixed $variables The variables
     *
     * @return self
     */
    public function setVariables($variables);

    /**
     * Adds the variables.
     *
     * @param mixed $variables The variables
     *
     * @return self
     */
    public function addVariables($variables);

    /**
     * Sets the variable.
     *
     * @param string $name  The variable name
     * @param mixed  $value The value of variable
     *
     * @return self
     */
    public function setVariable($name, $value);

    /**
     * Gets the variables.
     *
     * @return array The variables
     */
    public function getVariables();

    /**
     * Gets the variable.
     *
     * @param string $name    The variable name
     * @param mixed  $default The default value of variable
     *
     * @return mixed Returns the value of variable if any, $default otherwise
     */
    public function getVariable($name, $default = null);

    /**
     * Sets the module.
     *
     * @param string $moduleName The module name
     *
     * @return self
     */
    public function setModule($moduleName);

    /**
     * Gets the module.
     *
     * @return null|string Returns the module name if any, null otherwise
     */
    public function getModule();

    /**
     * Sets the template.
     *
     * @param string $template The template
     *
     * @return self
     */
    public function setTemplate($template);

    /**
     * Gets the template.
     *
     * @return null|string Returns template if any, null otherwise
     */
    public function getTemplate();

    /**
     * Sets the group identifier.
     *
     * @param string $id The group identifier
     *
     * @return self
     */
    public function setGroupId($id);

    /**
     * Gets the group identifier.
     *
     * @return string The group identifier
     */
    public function getGroupId();

    /**
     * Adds the child model.
     *
     * @param \Es\Mvc\ViewModelInterface $child   The child model
     * @param string                     $groupId Optional; the group identifier
     *
     * @return self
     */
    public function addChild(ViewModelInterface $child, $groupId = null);

    /**
     * Gets the iterator.
     *
     * @return \ArrayIterator The iterator
     */
    public function getIterator();
}
