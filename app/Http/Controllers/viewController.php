<?php
namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class ViewController extends Controller{
    public function showhome(){
        $this->render('welcome');
    }

}

?>