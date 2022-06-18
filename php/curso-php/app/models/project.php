<?php

namespace app\models;


use Illuminate\Database\Eloquent\Model;

class project extends Model{

    protected $table = 'projects';

    public function getduration()
    {
        $years = floor($this->months / 12);
        $extramonths = $this->months % 12;
        return "projects years: $years and $extramonths months";
    }
}

?>