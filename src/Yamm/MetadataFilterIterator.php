<?php
/**
 * This file is part of a marmalade GmbH project
 * It is not Open Source and may not be redistributed.
 * For contact information please visit http://www.marmalade.de
 *
 * @version    0.1
 * @author     Stefan Krenz <krenz@marmalade.de>
 * @link       http://www.marmalade.de
 */

namespace Marm\Yamm;

class MetadataFilterIterator extends \FilterIterator
{
    public function accept()
    {
        /** @var \SplFileInfo $current */
        $current    = $this->current();
        $hasDicFile = false;

        if (fnmatch('metadata.php', $current->getBasename())) {
            $baseDir    = dirname($current->getRealPath());
            $hasDicFile = file_exists("{$baseDir}/dic.php");
        }

        return $hasDicFile;
    }
}
