<?php

namespace Dhii\Test;

/**
 * Something that can test a class.
 *
 * @since [*next-version*]
 */
interface ClassTestCaseInterface extends TestCaseInterface
{
    /**
     * Tests whether a valid instance of the class can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated();

    /**
     * Creates an instance of the test subject class.
     *
     * @since [*next-version*]
     *
     * @return object A new instance of the test subject class.
     */
    public function createInstance();

    /**
     * Gets the name of the subject class.
     *
     * @since [*next-version*]
     * @string The name of the test subject class.
     */
    public function getClassName();

    /**
     * Gets the name of an interface or class, of which the subject class
     * must be a descendant.
     *
     * @since [*next-version*]
     *
     * @return string|null The name of the interface or class, or null if not constrained.
     */
    public function getClassType();
}
