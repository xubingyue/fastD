<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/10
 * Time: 上午11:30
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Kernel\Exceptions;

class BadRequestException extends FrameworkException
{
    protected $code = 400;
}