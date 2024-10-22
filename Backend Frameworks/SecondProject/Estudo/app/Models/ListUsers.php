<?php

namespace App\Models;

class ListUsers
{
    public $list = [];

    public function addUsers($user)
    {
        array_push($this->list,$user);
    }

    public function removeUsers($delete)
    {
        foreach($this->list as $lis)
        {
            if(array_search($delete,$this->list))
            {
                unset($lis);
            }
        }
    }

    public function getList()
    {
        return $this->list;
    }

}

?>
