<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{

    public function create($kanbanid){
        /**
         * Stages
         * 0 - Á fazer
         * 1 - Em progresso
         * 2 - Finalizado
         */
        $colors = [
            0 => 'blue',
            1 => 'orange',
            2 => 'green'
        ];

        $status = [
            'kanban_id' => $kanbanid,
            'stage' => 0,
            'color' => ''
        ];
        for($i=0;$i<=2;$i++){
            $status['stage'] = $i;
            $status['color'] = $colors[$i];
            Status::create($status);
        }


    }

    public static function findFirstStatusByKanban($kanban_id)
    {
        $status = Status::where('kanban_id', $kanban_id)->where('stage', 0)->get('id');
        foreach($status as $item){
            return strval($item['id']);

        }
    ;
    }


}
