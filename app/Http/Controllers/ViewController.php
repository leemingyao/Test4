<?php

class ViewController
{    
    protected $data;
    protected $_helper;

    function passData(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('home')->with('config',$this->data);
        
    }


}
?>