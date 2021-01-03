<?php

namespace OCA\MediaInfoLib\Attribute;

use OCA\MediaInfoLib\DumpTrait;

class Size implements AttributeInterface
{
    use DumpTrait;

    /**
     * @var int
     */
    private $bit;

    /**
     * @param string|int $size
     */
    public function __construct($size)
    {
        $this->bit = (int) $size;
    }

    /**
     * @return int
     */
    public function getBit(): int
    {
        return $this->bit;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->bit;
    }
}
