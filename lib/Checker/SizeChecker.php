<?php

namespace OCA\MediaInfoLib\Checker;

use OCA\MediaInfoLib\Attribute\Size;

class SizeChecker extends AbstractAttributeChecker
{
    /**
     * @param array $sizes
     *
     * @return Size
     */
    public function create($sizes): \OCA\MediaInfoLib\Attribute\Size
    {
        return new Size($sizes[0]);
    }

    /**
     * @return array
     */
    public function getMembersFields(): array
    {
        return [
            'file_size',
            'stream_size',
        ];
    }
}
