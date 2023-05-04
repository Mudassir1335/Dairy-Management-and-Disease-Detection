<?php

namespace App\Http\Controllers;
use App\Models\animal_records;
use Illuminate\Http\Request;

class animalController extends Controller
{

public function getAllDeliveryDates()
{
   
    $animals = animal_records::all(['cow_code', 'expected_delivery_date']);
    $deliveryDates = $animals->map(function ($animal) {
        return [
            'cow_code' => $animal->cow_code,
            'date' => $animal->expected_delivery_date,
        ];
    });
    return response()->json(['delivery_dates' => $deliveryDates]);

}
    public function showAnimals()
    {
        $data= animal_records::all();
        return view('manageanimal',['animal'=>$data]);

    }

    public function addanimal(Request $req)
    {
        $animal=new animal_records;
        $animal->cow_code=$req->animal_code;
        $animal->breed=$req->breed;
        $animal->weight=$req->weight;
        $animal->avg_milk=$req->avg_milk;
        $animal->purchase_price=$req->price;
        $animal->with_calf=$req->calf;
        $animal->age=$req->age;
        $animal->milking_status=$req->milking_status;
        $animal->sex=$req->sex;
        $animal->disease_history=$req->disease_history;
        $animal->total_calf=$req->total_calf;
        $animal->death_date=$req->death_date;
        $animal->calving_history=$req->calving;
        $animal->purchase_date=$req->purchase_date;
        $animal->sale_date=$req->sale_date;
        $animal->expected_delivery_date=$req->expected_date;
       
       
        $animal->save();
        return redirect()->back();

    }
    public function deleteanimal($id)
    {
        $data=animal_records::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function updateanimal(request $req,$id)
    {
       
       $animal=animal_records::find($id);
       $animal->cow_code=$req->animal_code;
       $animal->breed=$req->breed;
       $animal->weight=$req->weight;
       $animal->avg_milk=$req->avg_milk;
       $animal->purchase_price=$req->price;
       $animal->with_calf=$req->calf;
       $animal->age=$req->age;
       $animal->milking_status=$req->milking_status;
       $animal->sex=$req->sex;
       $animal->disease_history=$req->disease_history;
       $animal->total_calf=$req->total_calf;
       $animal->death_date=$req->death_date;
       $animal->calving_history=$req->calving;
       $animal->purchase_date=$req->purchase_date;
       $animal->sale_date=$req->sale_date;
       $animal->expected_delivery_date=$req->expected_date;
       $animal->update();
       return redirect()->back();


    }
    
    
}
