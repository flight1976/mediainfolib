<?php

namespace OCA\MediaInfoLib\Checker;

interface AttributeCheckerInterface
{
    public function getMembersFields();

    public function create($value);
}
