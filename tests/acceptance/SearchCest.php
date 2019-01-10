<?php

use Page\SearchResultPage;

class SearchCest
{
    public function _before()
    {

    }

    public function checkFirstSearchTitle(\Page\MainPage $mainPage)
    {
        $mainPage->open()
            ->waitForLoad()
            ->search('Codeception')
            ->waitForLoad()
            ->searchResultList()
            ->assertTitle('Codeception', 0);
    }

    public function checkSearchTitles(GuestTester $I)
    {
        $I->search('Codeception')->waitForLoad();
        $searchPage = new SearchResultPage($I);
        for ($i = 0; $i < 10; $i++) {
            $searchPage->searchResultList()->assertTitle('Codeception', $i);
        }
    }

    public function checkSearchTexts(GuestTester $I)
    {
        $I->search('Codeception')->waitForLoad();
        $searchPage = new SearchResultPage($I);
        for ($i = 0; $i < 10; $i++) {
            $searchPage->searchResultList()->assertText('Codeception', $i);
        }
    }
}