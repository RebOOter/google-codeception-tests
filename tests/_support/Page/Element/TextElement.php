<?php

namespace Page\Element;


use AcceptanceTester;

class TextElement extends BaseElement
{
    private $text;

    public function __construct(AcceptanceTester $I, $locator)
    {
        parent::__construct($I, $locator);
    }

    public function getText()
    {
        return $this->text;
    }
}