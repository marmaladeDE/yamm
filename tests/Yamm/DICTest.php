<?php

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
