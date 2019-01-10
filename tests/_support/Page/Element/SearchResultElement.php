<?php

namespace Page\Element;


use AcceptanceTester;

class SearchResultElement extends BaseElement
{
    private $title;
    private $link;
    private $dropDown;
    private $text;

    public function __construct(AcceptanceTester $I, $locator)
    {
        parent::__construct($I, $locator);

        $this->title = new TextElement($I, $locator . '//a/h3');
        $this->link = new TextElement($I, $locator . '//cite');
        $this->dropDown = new DropDownElement($I, $locator . '//div[@class = \'action-menu ab_ctl\']');
        $this->text = new TextElement($I, $locator . '//span[@class = \'st\']');
    }

    public function title()
    {
        return $this->title;
    }

    public function text()
    {
        return $this->text;
    }

}