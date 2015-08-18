<?php namespace App\Services\Pagination;

class SemanticUI {

    /**
     * Pagination wrapper HTML.
     *
     * @var string
     */
    protected $paginationWrapper = '<div class="ui pagination menu">%s %s %s</div>';

    /**
     * Available page wrapper HTML.
     *
     * @var string
     */
    protected $availablePageWrapper = '<a href="%s" class="item">%s</a>';

    /**
     * Get active page wrapper HTML.
     *
     * @var string
     */
    protected $activePageWrapper = '<div class="item active">%s</div>';

    /**
     * Get disabled page wrapper HTML.
     *
     * @var string
     */
    protected $disabledPageWrapper = '<div class="item disabled">%s</div>';

    /**
     * Previous button text.
     *
     * @var string
     */
    protected $previousButtonText = '<i class="left arrow icon"></i>';

    /**
     * Next button text.
     *
     * @var string
     */
    protected $nextButtonText = '<i class="right arrow icon"></i>';
    
    /***
     * "Dots" text.
    *
    * @var string
    */
    protected $dotsText = '...';
    
    /**
     * Get pagination wrapper HTML.
     *
     * @return string
     */
    protected function getPaginationWrapperHTML() {
        return $this->paginationWrapper;
    }

    /**
     * Get available page wrapper HTML.
     *
     * @return string
     */
    protected function getAvailablePageWrapperHTML() {
        return $this->availablePageWrapper;
    }

    /**
     * Get active page wrapper HTML.
     *
     * @return string
     */
    protected function getActivePageWrapperHTML() {
        return $this->activePageWrapper;
    }

    /**
     * Get disabled page wrapper HTML.
     *
     * @return string
     */
    protected function getDisabledPageWrapperHTML() {
        return $this->disabledPageWrapper; 
    }

    /**
     * Get previous button text.
     *
     * @return string
     */
    protected function getPreviousButtonText() {
        return $this->previousButtonText;
    }

    /**
     * Get next button text.
     *
     * @return string
     */
    protected function getNextButtonText() {
        return $this->nextButtonText;
    }

    /***
     * Get "dots" text.
     *
     * @return string
     */
    protected function getDotsText() {
        return $this->dotsText;
    }

}