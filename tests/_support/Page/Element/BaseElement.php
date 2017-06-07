<?php

namespace Page\Element;

use AcceptanceTester;

class BaseElement
{
    protected $tester;
    protected $locator;

    public function __construct(AcceptanceTester $I, $locator)
    {
        $this->tester = $I;
        $this->locator = $locator;
    }

    public function getLocator()
    {
        return $this->locator;
    }
}