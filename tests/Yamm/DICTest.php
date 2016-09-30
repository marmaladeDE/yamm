<?php
/**
 * This file is part of a marmalade GmbH project
 *
 * It is Open Source and may be redistributed as long as you keep the notice.
 * For contact information please visit http://www.marmalade.de
 *
 * Author URI: http://www.marmalade.de
 */


namespace Marm\Yamm;

class DICTest extends \PHPUnit_Framework_TestCase
{
    public function testSameObjectIsReturned()
    {
        $dic = new DIC();

        $dic['object'] = function() {
            return new \StdClass();
        };

        $this->assertSame($dic['object'], $dic['object']);
    }

    public function testSingleton()
    {
        $this->assertSame(
            DIC::getInstance(),
            DIC::getInstance()
        );
    }

    public function testGetEmptySetOfTaggedServices()
    {
        $dic = new DIC();

        $this->assertSame([], $dic->getTagged('unknown:tag'));
    }

    public function testTagService()
    {
        $dic = new DIC();

        $dic->tag('object', 'tag:name');
        $dic['object'] = function($dic) {
            return new \StdClass();
        };

        $dic['receiver'] = function($dic) {
            return [$dic->getTagged('tag:name')];
        };

        $this->assertSame([[$dic['object']]], $dic['receiver']);
    }
}
