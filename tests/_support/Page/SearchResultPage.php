<?php

namespace Page;


use Page\Element\SearchResultListElement;

class SearchResultPage extends BasePage
{
    private $searchResultList;

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);

        /*
         * In this case we build structure of classes as they presented in DOM. With this solution
         * it would be easy to fix usages of elements if they will be changed in DOM.
         * For example, in commit with this comment I changed only two little parts in selector
         * ('.//div[@class = 'srg']/div[$i]/div/div/h3/a' has been changed './/div[@class = 'srg']/div[$i]//a/h3')
         * instead of another big changes (Google changed DOM on their side).
         */
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