<?php

class Pesan extends Controller {

    public function __Construct()
    {
        parent::__Construct();

    }

    public function index()
    {
        $this->view->render('404');
    }


}