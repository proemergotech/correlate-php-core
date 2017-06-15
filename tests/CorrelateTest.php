<?php

namespace ProEmergotech\Correlate\Tests;

use PHPUnit\Framework\TestCase;
use ProEmergotech\Correlate\Correlate;

/**
 *
 * @category  \Example\PHPUnitTestCases
 * @package   \Example\PHPUnitTestCases
 */
class CorrelateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @before
     */
    public function setup()
    {

    }

    /**
     * @test
     */
    public function testDefaultHeaderName()
    {
        $this->assertEquals(Correlate::DEFAULT_HEADER_NAME, Correlate::getHeaderName());
    }

    /**
     * @test
     */
    public function testDefaultParamName()
    {
        $this->assertEquals(Correlate::DEFAULT_PARAM_NAME, Correlate::getParamName());
    }
}