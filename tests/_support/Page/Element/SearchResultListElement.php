<?php

namespace Page\Element;


use AcceptanceTester;

class SearchResultListElement extends BaseElement
{
    const ELEMENTS_PER_PAGE = 10;

    private $searchResultElements;

    public function __construct(AcceptanceTester $I, $locator)
    {
        parent::__construct($I, $locator);

        for ($i = 1; $i <= self::ELEMENTS_PER_PAGE; $i++)
        {
            $this->searchResultElements[] = new SearchResultElement($I, $locator . "/div[$i]");
        }
    }

    public function assertTitle($value, $id)
    {
        $this->tester->see($value, $this->searchResultElements[$id]->title()->getLocator());
    }

    public function assertText($value, $id)
    {
        $this->tester->see($value, $this->searchResultElements[$id]->text()->getLocator());
    }
}