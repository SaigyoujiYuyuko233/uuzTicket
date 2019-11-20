<?php

namespace App\Http\Controllers\Tickets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ShowController extends Controller
{

    /**
     * 访问 '/' 重定向至 tickets.index
     *
     * @return string
     */
    public function rootRedirection() { return redirect(route('tickets.index')); }

    /**
     * 展示工单
     *
     * @return Response
     */
    public function index() {
        // TODO: 完成 tickets 数据库后 获取正在处理的ticket 和前6个最近结束的ticket到视图
        //$openingTickets
        //closedTickets

        return view('tickets.index');
    }

}
