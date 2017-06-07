<?php

namespace Page\Element;


class DropDownElement extends BaseElement
{
    public function click($value)
    {
        $this->tester->click($this->locator);
        $this->tester->click($this->locator . "//a[contains(text(), '$value')]");
    }
}