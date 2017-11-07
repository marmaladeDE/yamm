<?php
/**
 * Copyright (c) 2016 marmalade GmbH
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of
 * the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Author URI: http://www.marmalade.de
 */


/**
 * @extends oxshopcontrol
 */
class marm_yamm_oxshopcontrol extends marm_yamm_oxshopcontrol_parent
{
    /**
     * Start
     *
     * @param string $sClass
     * @param string $sFunction
     * @param array $aParams
     * @param array $aViewsChain
     * @return void
     */
    /* We don't need this overwrite anymore
    public function start($sClass = null, $sFunction = null, $aParams = null, $aViewsChain = null)
    {
        require_once __DIR__ . '/../bootstrap.php';

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }
    */
}
