<?php

namespace Page;


class BasePage
{
    protected $tester;
    protected $URL;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function open()
    {
        $this->tester->amOnPage($this->URL);
        return $this;
    }
}