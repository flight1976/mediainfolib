<?php

namespace OCA\MediaInfoLib\Parser;

use OCA\MediaInfoLib\Container\MediaInfoContainer;

interface OutputParserInterface
{
    /**
     * @param string $output
     */
    public function parse(string $output);

    /**
     * @return MediaInfoContainer
     */
    public function getMediaInfoContainer(): \OCA\MediaInfoLib\Container\MediaInfoContainer;
}
