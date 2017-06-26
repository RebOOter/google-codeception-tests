<?php

class GuestTester extends AcceptanceTester
{
    use \Step\SearchStep;

    public function __construct(\Codeception\Scenario $scenario)
    {
        parent::__construct($scenario);

        $this->currentPage = new \Page\BasePage($this);
    }

    public function waitForSearchResults()
    {
        $searchResultsPage = new \Page\SearchResultPage($this->getTester());

        $searchResultsPage->waitForLoad();
    }

    public function openMainPage()
    {
        $mainPage = new \Page\MainPage($this);
        $mainPage->open();
        $mainPage->waitForLoad();
    }
}