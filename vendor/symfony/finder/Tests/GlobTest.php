<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Symfony\Component\Finder\Tests;

use Symfony\Component\Finder\Glob;
class GlobTest extends \PHPUnit_Framework_TestCase
{
    public function testGlobToRegexDelimiters()
    {
        $this->assertEquals('#^(?=[^\\.])\\#$#', Glob::toRegex('#'));
        $this->assertEquals('#^\\.[^/]*$#', Glob::toRegex('.*'));
        $this->assertEquals('^\\.[^/]*$', Glob::toRegex('.*', true, true, ''));
        $this->assertEquals('/^\\.[^/]*$/', Glob::toRegex('.*', true, true, '/'));
    }
}

?>