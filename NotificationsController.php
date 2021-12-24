<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notifications;

class NotificationsController extends Controller
{

    public function Notifications_index(Request $request){   
        
        //->where('updated_at',"2021-12-09 14:20:17")

        $notifications = notifications::all()->where('forum_group_id',$request->forum_group_id);;
        
        
        return response()->json([
                'status' => 200,
                'message' => $notifications,
        ]);

    }
    
}
