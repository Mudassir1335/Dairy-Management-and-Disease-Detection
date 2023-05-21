<?php

namespace App\Http\Controllers;

use App\Models\milk_record;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MilkRecordController extends Controller
{
    //
    public function showmilkrecord()
    {
        $data= milk_record::all();
        return view('milkrecords',['records'=>$data]);

    }
     
    public function addmilkrecord(Request $req)
    {
        $data=new milk_record;
        $data->date=$req->date;
        $data->cow_code=$req->ccode;
        $data->morning=$req->morning;
        $data->evening=$req->evening;
        $data->total=$data->morning+$data->evening;
        $data->reason=$req->reason;
        
        $data->save();
        return redirect('milkrecords');

    }
    
    public function deletemilkrecord($id)
    {
        $data=milk_record::find($id);
        $data->delete();
        return redirect('milkrecords');

    }

    public function updatemilkrecord(request $req)
    {
       
       $data=milk_record::find($req->id);
       $data->date=$req->date;
       $data->cow_code=$req->ccode;
       $data->morning=$req->morning;
       $data->evening=$req->evening;
       $data->total=$data->morning+$data->evening;
       $data->reason=$req->reason;
       
       
       $data->update();
       return redirect('milkrecords');


    }

public function checkMilkRecord()
{
   
    $yesterdayDate = date('Y-m-d', strtotime('-1 day'));

    
    $currentDayRecords = milk_record::whereDate('date', '=', date('Y-m-d'))->get();
    $previousDayRecords = milk_record::whereDate('date', '=', $yesterdayDate)->get();

    // Check the total values for each cow
    $alerts = [];
    foreach ($currentDayRecords as $currentDayRecord) {
       
        if ($currentDayRecord->reason) {
            continue; 
        }

        $previousDayRecord = $previousDayRecords->where('cow_code', $currentDayRecord->cow_code)->first();
        if ($previousDayRecord && $currentDayRecord->total < $previousDayRecord->total) {
            $alerts[] = 'Cow ' . $currentDayRecord->cow_code . ' has less milk than yesterday. Please enter less milk Reason';
        }
    }

    return response()->json(['alerts' => $alerts], 200);
}
public function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('animal_record')
                ->where('cow_code', 'LIKE', "%{$query}%")
                ->get();
    
            $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;border:solid 2px black">';
            foreach ($data as $row) {
                $output .= '<li><a class="dropdown-item" href="#">'.$row->cow_code.'</a></li>';
            }
            $output .= '</ul>';
    
            return new Response($output);
        }
}
}
