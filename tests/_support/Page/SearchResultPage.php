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
    private $searchResultList = './/div[@class = \'srg\']';

    public function __construct(\AcceptanceTester $I)
    {
        parent::__construct($I);
    }

    public function waitForLoad()
    {
        $this->tester->waitForElement($this->searchResultList);

        return $this;
    }

    public function searchResultList()
    {
        return $this->searchResultList;
    }

    public function assertTitle($title, $id)
    {
        $this->tester->see($title, ".//div[@class = 'srg']/div[$id]/div/div/h3/a");
    }

    public function assertText($text, $id)
    {
        $this->tester->see($text, ".//div[@class = 'srg']/div[$id]/div/div//cite");
    }
}