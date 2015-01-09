<?php

class Error {

public function __construct()
    {
        $this->_view = new View();
        $this->_view->render('error/index' , $noInclude = true);
    }

}
