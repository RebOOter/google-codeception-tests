<?php

namespace Page\Element;


class ButtonElement extends BaseElement
{
    public function click()
    {
        $this->tester->click($this->locator);
    }
}