<?php

namespace App\pattern\Fluent;

interface FluentInterface
{
    public function orderBy($row, $val);

    public function where($row, $val);

    public function get();
}
