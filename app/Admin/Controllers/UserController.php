<?php

namespace App\Admin\Controllers;

use App\User;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Admin\Extensions\ExcelExpoter;

/**
 * Class UserController
 * @package App\Admin\Controllers
 *
 * php artisan admin:make UserController
 */

class UserController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('用户列表');

            // 选填
            $content->description('注册用户列表页');

            // 添加面包屑导航 since v1.5.7
            $content->breadcrumb(
                ['text' => '用户管理', 'url' => '/users#'],
                ['text' => '用户列表']
            );




            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {

            //禁用新增按钮
            $grid->disableCreation();

            $grid->id('ID')->sortable();

            //多列查询
            $grid->columns([
                'username'  =>'用户名',
                'email'     =>'电子邮箱',
                'phone'     =>'手机号码',
                'created_at'     =>'注册时间',
            ]);

            //查询，筛选菜单中的选项
            $grid->filter(function ($filter) {
                //过滤掉id
                $filter->disableIdFilter();
                //模糊查询条件
                $filter->like('username','用户名');
                $filter->like('email','电子邮箱');
                $filter->like('phone','手机号码');
                $filter->between('created_at', '注册时间')->datetime();
            });

            //导出用户信息excel表格
            $excel_name ='user_excel';
            $grid->exporter(new ExcelExpoter($excel_name));

        });
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {

            $form->display('username', '用户名');

            //$form->text('username', trans('admin.username'));

            $form->display('created_at', '注册时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
