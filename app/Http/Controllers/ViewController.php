<?php

class ViewController
{    
    protected $data;
    protected $_helper;

    function viewHome(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('home')->with('config',$this->data);
        
    }

    function viewAbout(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('aboutus')->with('config',$this->data);
        
    }

    function viewServices(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('services')->with('config',$this->data);
        
    }

    function viewNews(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('news')->with('config',$this->data);
        
    }

    function viewContactUs(){

        $this->data = include '../config.php';
        
        //function with() > with('variable name', data to be store)
        return view('contact')->with('config',$this->data);
        
    }


}
?>