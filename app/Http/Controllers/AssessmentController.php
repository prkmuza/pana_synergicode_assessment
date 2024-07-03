<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AssessmentController extends Controller
{

      public function start_assessment()
    {   
        return view('start_assessment.index');
    }

      public function save(Request $request)
    {   
        $name = $request->input('Name');
        $email = $request->input('Email');
        $comment = $request->input('Comments');
        $comment= html_entity_decode($comment);
        $comment= strip_tags($comment);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return "1010";//email error
        }else{

            $insertedId = DB::table('user_data')->insertGetId(
                ['name' => $name,
                    'email' => $email,
                    'comments' => $comment,
                    'created_at' => date("Y-m-d H:i:s",time())
                ]
            );

            return "200";
        }

    }

      public function view_results()
    {   
     
        $GetUserData = DB::table('user_data')->get();
        
        foreach($GetUserData as $GetUserDataItem){

        	echo '
	            <div style="border-bottom: solid 1px #000;">
	            '.$GetUserDataItem->name.' | '.$GetUserDataItem->email.' | '.$GetUserDataItem->created_at.' </br>
	              '.$GetUserDataItem->comments.'
	            </div>
        	';

        }

    }

}
