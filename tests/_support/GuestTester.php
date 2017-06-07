<?php

class GuestTester extends AcceptanceTester
{
    use \Step\SearchStep;

    public function __construct(\Codeception\Scenario $scenario)
    {
        parent::__construct($scenario);

        $this->currentPage = new \Page\BasePage($this);
    }
}