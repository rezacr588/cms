<?php
namespace Great\Cms;
use Great\Cms\Models\Admin;
class Cms
{
    public function listAdmin(){
        return Admin::pluck('username');
    }
}
