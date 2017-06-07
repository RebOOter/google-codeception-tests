<?php
/**
 * Created by PhpStorm.
 * User: reboo
 * Date: 07.06.2017
 * Time: 23:02
 */

namespace Page;


use Page\Element\SearchResultListElement;

class SearchResultPage extends BasePage
{
    private $searchResultList;

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);

        $searchResultListLocator = './/div[@class = \'srg\']';

        $this->searchResultList = new SearchResultListElement($I, $searchResultListLocator);
    }

    public function waitForLoad()
    {
        $this->tester->waitForElement($this->searchResultList->getLocator());

        return $this;
    }

    public function searchResultList()
    {
        return $this->searchResultList;
    }
}