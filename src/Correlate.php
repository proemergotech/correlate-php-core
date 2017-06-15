<?php

/**
 * @author Soma Szelpal <szelpalsoma@gmail.com>
 * @license MIT
 */
namespace ProEmergotech\Correlate;

use Closure;

/**
 * Class Correlate
 *
 * @package ProEmergotech\Correlate
 */
class Correlate
{
    /**
     * @var string
     */
    const DEFAULT_HEADER_NAME = 'X-Correlation-ID';

    /**
     * @var string
     */
    const DEFAULT_PARAM_NAME = 'x_correlation_id';

    /**
     * @var string
     */
    protected static $headerName = static::DEFAULT_HEADER_NAME;

    /**
     * @var string
     */
    protected static $paramName = static::DEFAULT_PARAM_NAME;

    /**
     * @var Closure
     */
    protected static $generatorFunc = null;

    /**
     * Creates a correlation id
     * @return string
     */
    public static function id(): string
    {
        return (string) static::getGeneratorFunc()();
    }

    /**
     * @return string
     */
    public static function getHeaderName(): string
    {
        return static::$headerName;
    }

    /**
     * @param string $val
     */
    public static function setHeaderName(string $val)
    {
        static::$headerName = $val;
    }

    /**
     * @return string
     */
    public static function getParamName(): string
    {
        return static::$paramName;
    }

    /**
     * @param string $val
     */
    public static function setParamName(string $val)
    {
        static::$paramName = $val;
    }

    /**
     * @return [type] [description]
     */
    public static function getGeneratorFunc(): Closure
    {
        if ((static::$generatorFunc instanceof Closure)) {
            return static::$generatorFunc;
        }

        return function () {
            return (string) \Webpatser\Uuid\Uuid::generate(4);
        };
    }

    /**
     * @param Closure $g Function that returns a random identifier
     */
    public function setGeneratorFunc(Closure $g)
    {
        static::$generatorFunc = $q;
    }
}
