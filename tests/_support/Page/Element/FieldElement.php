<?php

namespace Page\Element;

class FieldElement extends BaseElement
{
    public function fillField($value)
    {
        $this->tester->fillField($this->locator, $value);
    }

    public function sendKey($key)
    {
        $this->tester->pressKey($this->locator, $key);
    }
}