<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function index()
    {
        // return $news =  DB::table('notifications')->orderBy('created_at', 'DESC')->get();
        return view('admin.notification.index');
    }

    public function getAllNoti()
    {
        $notifications =  DB::table('notifications')->orderBy('created_at', 'DESC')->get();
        return datatables($notifications)
            ->addIndexColumn()
            ->addColumn('action', function ($noti){
                return
                '<a class="btn btn-danger delete-btn" href="#" data-id="'.$noti->id.'"><i data-id="'.$noti->id.'" class="delete-btn ft-trash-2"></i></a>';
            })
            ->editColumn('created_at', function ($noti) {
                return Carbon::parse($noti->created_at)->diffForHumans();
            })

            ->editColumn('type', function($noti) {
                return json_decode($noti->data)->title;
            })

            ->editColumn('data', function($noti) {
                return json_decode($noti->data)->content;
            })

            ->escapeColumns([])

            ->make(true);
    }


    public function destroy(Request $request)
    {
        $noti = Notification::where('id', $request->id)->first();
        $noti->delete();
    }
}
