<?php

use Page\SearchResultPage;

class SearchCest
{
    private $text = 'Codeception';

    public function _before()
    {

    }

    public function checkFirstSearchTitle(GuestTester $I)
    {
        $I->openMainPage();
        $I->search($this->text);
        $I->waitForSearchResults();
        $I->seeInSearchTitle($this->text, 1);
    }

    public function checkSearchTitles(GuestTester $I)
    {
        $I->openMainPage();
        $I->search($this->text);
        $I->waitForSearchResults();
        for ($i = 1; $i <= 10; $i ++) {
            $I->seeInSearchTitle($this->text, 1);
        }
    }

    public function checkSearchTexts(GuestTester $I)
    {
        $I->openMainPage();
        $I->search($this->text);
        $I->waitForSearchResults();
        for ($i = 1; $i <= 10; $i ++) {
            $I->seeInSearchText($this->text, 1);
        }
    }
}