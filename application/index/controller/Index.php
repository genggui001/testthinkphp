<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index($name = 'World')
    {
        return 'hello'.$name;
    }
    public function hello ($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
