<?php

namespace OCA\MediaInfoLib\Factory;

use OCA\MediaInfoLib\Checker\AbstractAttributeChecker;
use OCA\MediaInfoLib\Checker\CoverChecker;
use OCA\MediaInfoLib\Checker\DateTimeChecker;
use OCA\MediaInfoLib\Checker\DurationChecker;
use OCA\MediaInfoLib\Checker\ModeChecker;
use OCA\MediaInfoLib\Checker\RateChecker;
use OCA\MediaInfoLib\Checker\RatioChecker;
use OCA\MediaInfoLib\Checker\SizeChecker;

class AttributeFactory
{
    /**
     * @param $attribute
     * @param $value
     *
     * @return mixed
     */
    public static function create($attribute, $value)
    {
        $attributesType = self::getAllAttributeType();
        foreach ($attributesType as $attributeType) {
            if ($attributeType->isMember($attribute)) {
                return $attributeType->create($value);
            }
        }

        return $value;
    }

    /**
     * @return AbstractAttributeChecker[]
     */
    private static function getAllAttributeType(): array
    {
        return [
            new CoverChecker(),
            new DurationChecker(),
            new ModeChecker(),
            new RateChecker(),
            new RatioChecker(),
            new SizeChecker(),
            new DateTimeChecker(),
        ];
    }
}
