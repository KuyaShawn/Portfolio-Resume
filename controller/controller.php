<?php

class portfolioController
{
    private $_f3;

    public function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    public function about()
    {
        // Display the home page
        $view = new Template();
        echo $view->render('views/about.html');
    }

    public function extras()
    {
        // Extras page
        $view = new Template();
        echo $view->render('views/extras.html');
    }

}