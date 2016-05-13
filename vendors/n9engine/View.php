<?php
namespace n9engine;
class View
{
    public $content = '';
    public $layout = 'layout';
    public $data = [];
    public function get($view = '', $data = [])
    {
        $this->data = (object)$data;
        var_dump($this->data->user);
        
        $path = APP.'/views/'.$view.'.php';
        if(file_exists($path))
        {
            $this->content = file_get_contents($path);
        }
        if(file_exists(APP.'/views/layouts/'.$this->layout.'.php'))
        {
           include_once APP.'/views/layouts/'.$this->layout.'.php';
        }
    }
}