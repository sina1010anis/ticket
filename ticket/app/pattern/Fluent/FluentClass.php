<?php


namespace App\pattern\Fluent;


class FluentClass
{
    public function orderBy($row , $val)
    {
        echo $row . ' (Sort By) ' . $val.'<br>';
        return $this;
    }
    public function where($row , $val)
    {
        echo $row . ' (Where =) ' . $val.'<br>';
        return $this;
    }
    public function get()
    {
        echo 'Select'.'<br>';
        return $this;
    }
}
