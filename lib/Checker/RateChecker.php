<?php

namespace OCA\MediaInfoLib\Checker;

use OCA\MediaInfoLib\Attribute\Rate;

class RateChecker extends AbstractAttributeChecker
{
    /**
     * @param array $value
     *
     * @return Rate
     */
    public function create($value): \OCA\MediaInfoLib\Attribute\Rate
    {
        return new Rate($value[0], $value[1]);
    }

    /**
     * @return array
     */
    public function getMembersFields(): array
    {
        return [
            'maximum_bit_rate',
            'channel_s',
            'bit_rate',
            'sampling_rate',
            'bit_depth',
            'width',
            'nominal_bit_rate',
            'frame_rate',
            'format_settings_reframes',
            'height',
            'resolution',
        ];
    }
}
