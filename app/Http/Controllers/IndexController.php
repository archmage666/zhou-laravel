<?php
/**
 * @source: IndexController.php
 * @User  : Web研发中心-周磊 (mailto:zhoulei2@kingsoft.com)
 * @Time  : 2018/1/8 16:52
 */

namespace App\Http\Controllers;

class IndexController extends Controller
{

    public function index()
    {
        return view('index.index');
    }

}