<?php


namespace App\pattern\T1;


class Verify
{
    public function handle($id , Loger $loger)
    {
        return "User Is Ok Verify : ID ".$id .' . and Interface :'. $loger->log('Sina');
    }
}
