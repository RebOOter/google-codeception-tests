<?php

namespace Page\Element;


use AcceptanceTester;
use Facebook\WebDriver\WebDriverKeys;

class SearchForm extends BaseElement
{
    private $searchField;
    private $searchButton;
    private $meLuckButton;
    private $screenKeyboardButton;
    private $voiceInputButton;

    public function __construct(AcceptanceTester $I, $locator)
    {
        parent::__construct($I, $locator);

        $this->searchField = new FieldElement($I, '.gsfi');
        $this->searchButton = new ButtonElement($I, './/*[@name = \'btnK\']');
        $this->meLuckButton = new ButtonElement($I, './/*[@name = \'btnI\']');
        $this->screenKeyboardButton = new ButtonElement($I, '#gs_ok0');
        $this->voiceInputButton = new ButtonElement($I, '#gsri_ok0');
    }

//    public function search($query)
//    {
//        $this->searchField->fillField($query);
//        $this->searchField->sendKey(WebDriverKeys::ENTER);
//    }

    public function searchField()
    {
        return $this->searchField;
    }
}