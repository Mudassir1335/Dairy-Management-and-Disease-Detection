<?php

namespace App\Http\Controllers;

use App\Models\disease;
use App\Models\Symptom;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    public function diagnose(Request $request)
    {
        $selectedSymptoms = $request->input('symptoms', []);
        if (in_array('Others', $selectedSymptoms)) {
            // Remove "Others" from the selected symptoms
            $selectedSymptoms = array_diff($selectedSymptoms, ['Others']);
        }
        //print_r($selectedSymptoms);
        // Retrieve diseases associated with the selected symptoms
        $diseases = Disease::whereIn('id', function ($query) use ($selectedSymptoms) {
            $query->select('disease_id')
                ->from('symptom_disease_mappings')
                ->whereIn('symptom_id', function ($subQuery) use ($selectedSymptoms) {
                    $subQuery->select('id')
                        ->from('symptoms')
                        ->whereIn('symptom_name', $selectedSymptoms);
                });
        })->get();
        // Find the disease with the most matching symptoms
$maxMatchingSymptoms = 0;
$matchingDisease = null;

foreach ($diseases as $disease) {
    $matchingSymptomsCount = $disease->symptoms->whereIn('symptom_name', $selectedSymptoms)->count();
    if ($matchingSymptomsCount > $maxMatchingSymptoms) {
        $maxMatchingSymptoms = $matchingSymptomsCount;
        $matchingDisease = $disease;
    }
}

// Filter the diseases array to include only the matching disease
$diseases = $matchingDisease ? collect([$matchingDisease]) : collect([]);

        // dd($diseases->toArray());
        if ($diseases->isEmpty()) {
            // Handle the case when no diseases are found
            return "No diseases found for the selected symptoms.";
        }
        
        return view('diagnose', compact('diseases'));
    }
}