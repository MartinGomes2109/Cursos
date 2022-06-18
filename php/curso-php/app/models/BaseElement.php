<?php

namespace app\models;



class BaseElement  
{
    public $title;
    public $visible = true;
    public $description;
    public $months;
    //public: puede ser accedido desde cualquier parte
    //private: solo puede ser accedido desde la misma clase con function
    //protected: es igual que private pero tambien se puede acceder desde las clases hijas

    public function __construct($title, $description)
    {
        $this->settitle($title);
        $this->description = $description;
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function settitle($t)
    {
        if ($t == 'job: ') {
            $this->title = 'job: N/A';
        } else {
            $this->title = $t;
        }
        /* $this->title = ($t == '') ? 'N/A' : $t; */
    }

    public function getduration()
    {
        $years = floor($this->months / 12);
        $extramonths = $this->months % 12;
        return "$years years $extramonths months";
    }
    public function getDescription()
    {
        return $this->description;
    }
}

?>