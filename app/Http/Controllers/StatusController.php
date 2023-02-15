<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{

    public function create($kanbanid){
        $status = [
            'kanban_id' => $kanbanid,
            'stage' => 0
        ];
        for($i=1;$i<=3;$i++){
            $status['stage'] = $i;
            Status::create($status);
        }


    }

}
