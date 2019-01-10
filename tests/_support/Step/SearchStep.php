<?php

namespace Step;

use Page\MainPage;

/**
 * Trait SearchStep
 * @package Step
 *
 * This is not a perfect solution for reducing reusable code
 */
trait SearchStep
{
    public function search($query)
    {
        $this->currentPage = new MainPage($this->getTester());
        return $this->currentPage
            ->open()
            ->search($query);
    }
}