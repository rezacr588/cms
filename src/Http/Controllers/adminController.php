<?php
namespace Great\Cms\Http\Controllers;
use App\Http\Controllers\Controller;
use Cms;
use Great\Cms\Models\Admin;
class adminController extends Controller
{
    public function index(){
        return Cms::listAdmin();
    }
}
