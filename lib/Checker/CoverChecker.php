<?php

namespace OCA\MediaInfoLib\Checker;

use OCA\MediaInfoLib\Attribute\Cover;

class CoverChecker extends AbstractAttributeChecker
{
    /**
     * @param string $value
     *
     * @return Cover
     */
    public function create($value): \OCA\MediaInfoLib\Attribute\Cover
    {
        return new Cover($value);
    }

    /**
     * @return array
     */
    public function getMembersFields(): array
    {
        return ['cover_data'];
    }
}
