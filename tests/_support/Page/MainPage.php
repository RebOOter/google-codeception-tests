<?php

namespace Page;

use Page\Element\SearchForm;

class MainPage extends BasePage
{
    protected $URL = '/';

    private $searchField = '.gsfi';
    private $searchButton = './/*[@name = \'btnK\']';
    private $meLuckButton = './/*[@name = \'btnI\']';
    private $searchKeyboardButton = '#gs_ok0';
    private $voiceInputButton = '#gsri_ok0';

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);
    }

    public function waitForLoad()
    {
        $this->tester->waitForElement($this->searchField);

        return $this;
    }

    public function search($query)
    {
        $this->tester->fillField($this->searchField, $query);
        $this->tester->pressKey($this->searchField, \WebDriverKeys::ENTER);
    }
}