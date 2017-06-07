<?php

namespace Page;

use Page\Element\SearchForm;

class MainPage extends BasePage
{
    protected $URL = '/';
    private $searchForm;

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);

        $formLocator = '.tsf';

        $this->searchForm = new SearchForm($I, $formLocator);
    }

    public function waitForLoad()
    {
        $this->tester->waitForElement($this->searchForm->getLocator());

        return $this;
    }

    public function search($query)
    {
        $this->searchForm->searchField()->fillField($query);
        $this->searchForm->searchField()->sendKey(\WebDriverKeys::ENTER);
        $page = new SearchResultPage($this->tester);
        return $page;
    }
}