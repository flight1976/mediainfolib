<?php

namespace OCA\MediaInfoLib\Attribute;

interface AttributeInterface extends \JsonSerializable
{
    /**
     * @return string
     */
    public function __toString(): string;
}
