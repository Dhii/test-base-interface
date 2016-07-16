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
     */
    public function createInstance();

    /**
     * Gets the name of the subject class.
     *
     * @since [*next-version*]
     */
    public function getClassName();

    /**
     * Gets the name of an interface or class, of which the subject class
     * must be a descendant.
     *
     * @since [*next-version*]
     */
    public function getClassType();
}
