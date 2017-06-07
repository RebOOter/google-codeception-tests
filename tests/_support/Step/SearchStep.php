<?php

namespace Step;

use Page\MainPage;

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