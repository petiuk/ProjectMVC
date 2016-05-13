<?php
namespace n9engine;
class Controller
{
    public $view;
    public function __construct()
    {
        $view = new View();
        $this->view = $view;
    }
}
