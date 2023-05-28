<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symptom;
use App\Models\Disease;
use App\Models\SymptomDiseaseMapping;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create symptoms
        // Create symptoms
        $symptom1 = Symptom::create(['symptom_name' => 'Swelling']);
        $symptom2 = Symptom::create(['symptom_name' => 'Redness']);
        $symptom3 = Symptom::create(['symptom_name' => 'Heat']);
        $symptom4 = Symptom::create(['symptom_name' => 'Pain']);
        $symptom5 = Symptom::create(['symptom_name' => 'Coughing']);
        $symptom6 = Symptom::create(['symptom_name' => 'Nasal discharge']);
        $symptom7 = Symptom::create(['symptom_name' => 'Rapid breathing']);
        $symptom8 = Symptom::create(['symptom_name' => 'Reduced appetite']);
        $symptom9 = Symptom::create(['symptom_name' => 'Distension']);
        $symptom10 = Symptom::create(['symptom_name' => 'Salivation']);
        $symptom11 = Symptom::create(['symptom_name' => 'Discomfort']);
        $symptom12 = Symptom::create(['symptom_name' => 'Abnormal posture']);
        // Create diseases
        $disease1 = Disease::create(['disease_name' => 'Mastitis']);
        $disease2 = Disease::create(['disease_name' => 'Bovine Respiratory Disease (BRD)']);
        $disease3 = Disease::create(['disease_name' => 'Bloat']);
        $disease4 = Disease::create(['disease_name' => 'Foot Rot']);

        // Create symptom-disease mappings
        SymptomDiseaseMapping::create(['symptom_id' => $symptom1->id, 'disease_id' => $disease1->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom2->id, 'disease_id' => $disease1->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom3->id, 'disease_id' => $disease1->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom4->id, 'disease_id' => $disease1->id]);

        SymptomDiseaseMapping::create(['symptom_id' => $symptom5->id, 'disease_id' => $disease2->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom6->id, 'disease_id' => $disease2->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom7->id, 'disease_id' => $disease2->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom8->id, 'disease_id' => $disease2->id]);

        SymptomDiseaseMapping::create(['symptom_id' => $symptom9->id, 'disease_id' => $disease3->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom10->id, 'disease_id' => $disease3->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom11->id, 'disease_id' => $disease3->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom12->id, 'disease_id' => $disease3->id]);

        SymptomDiseaseMapping::create(['symptom_id' => $symptom1->id, 'disease_id' => $disease4->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom2->id, 'disease_id' => $disease4->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom3->id, 'disease_id' => $disease4->id]);
        SymptomDiseaseMapping::create(['symptom_id' => $symptom4->id, 'disease_id' => $disease4->id]);
    }
}

 
  