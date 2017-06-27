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

use Marm\Yamm\DICBuilder;

if(!function_exists('oxNew'))
{
    require_once __DIR__ . '/../../../../../bootstrap.php';
}

require_once __DIR__ . '/../../vendor/autoload.php';

$moduleDirectory = realpath(__DIR__ . '/../../../../');
$shopRoot = realpath("{$moduleDirectory}/..");

$cacheFile = "{$shopRoot}/tmp/yamm-dic.dic-files.cache";

$dicFiles = null;
if (file_exists($cacheFile)) {
    $dicFiles = unserialize(file_get_contents($cacheFile));
}

if (null === $dicFiles) {
    $dicFiles = [];

    if (file_exists($shopDicFile = "{$shopRoot}/dic.php")) {
        $dicFiles[] = $shopDicFile;
    }

    $dicFiles = array_merge($dicFiles, DICBuilder::findDICFiles($moduleDirectory));

    file_put_contents($cacheFile, serialize($dicFiles));
}

$dic = DICBuilder::getContainer($dicFiles);

oxRegistry::set('yamm_dic', $dic);
