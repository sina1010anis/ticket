<?php


namespace App\pattern\ProtoType;


use App\pattern\T1\Auth;

class Page
{
    public $title , $text , $time , $user;
    public $userName , $comment = [];
    public function __construct($title , $text  , Author $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->user = $author;
        $this->time = new \DateTime();
        $this->userName = $author->userName('sina');
    }

    public function setComment($not){
        $this->comment[] = $not;
    }

    public function __clone()
    {
        $this->title ='Copy ---' .$this->title;
        $this->user->userName('sina');
        $this->comment;
        $this->time = new \DateTime();
    }


}
