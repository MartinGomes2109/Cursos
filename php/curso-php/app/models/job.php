<?php

namespace app\models;


use Illuminate\Database\Eloquent\Model;

class job extends Model{
    protected $table = 'jobs';

    public function getduration(){

        $years = floor($this->months / 12);
        $extramonths = $this->months % 12;
        return "job duration: $years years $extramonths months";
    }
    public function getDescription(){
        return $this->description;
    }
}

?>