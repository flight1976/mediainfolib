<?php

namespace OCA\MediaInfoLib\Checker;

use OCA\MediaInfoLib\Attribute\Duration;

class DurationChecker extends AbstractAttributeChecker
{
    /**
     * @param array $durations
     *
     * @return Duration
     */
    public function create($durations): \OCA\MediaInfoLib\Attribute\Duration
    {
        return new Duration($durations[0]);
    }

    /**
     * @return array
     */
    public function getMembersFields(): array
    {
        return [
            'duration',
            'delay_relative_to_video',
            'video0_delay',
            'delay',
        ];
    }
}
