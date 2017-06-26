<?php

namespace Step;

use Page\MainPage;
use Page\SearchResultPage;

trait SearchStep
{
    public function search($query)
    {
        $mainPage = new MainPage($this->getTester());

        $mainPage->search($query);
    }

    public function seeInSearchTitle($text, $id)
    {
        $searchResultPage = new SearchResultPage($this->getTester());

        $searchResultPage->assertTitle($text, $id);
    }

    public function seeInSearchText($text, $id)
    {
        $searchResultPage = new SearchResultPage($this->getTester());

        $searchResultPage->assertText($text, $id);
    }
}