<?php

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\AbstractExporter;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExpoter extends AbstractExporter
{

    public $excel_name;

    public function __construct($excel_name = null)
    {
        parent::__construct();

        if ($excel_name) {
            $this->excel_name = $excel_name;
        }
    }


    public function export(){


        if(isset($this->excel_name)){

            switch ($this->excel_name) {
                case 'user_excel':

                    $this->user_excel();
                    break;

                case 1:

                    echo "i equals 1";
                    break;

                case 2:

                    echo "i equals 2";
                    break;

            }

        }



    }

    /**
     * 用户信息导出excel表
     */
    public function user_excel()
    {

        Excel::create('用户注册表'.date('Y-m-d'), function($excel) {

            $excel->sheet('sheet', function($sheet) {

                //在导出表格首行加入标题行
                $sheet->prependRow(1, array(
                    'id', '用户名','电子邮箱','手机号码','注册时间'
                ));

                // 这段逻辑是从表格数据中取出需要导出的字段
                $rows = collect($this->getData())->map(function ($item) {
                    return array_only($item, ['id', 'username', 'email','phone','created_at']);
                });

                $sheet->rows($rows);

            });

        })->download('xls');

    }

}