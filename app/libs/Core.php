<?php


class Core
{// class begin

    // get url data
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            echo $url;
        }
    }

} //class end

