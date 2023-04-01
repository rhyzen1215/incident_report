<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
//use App\Models\tables\crime;
//use App\Models\tables\brgy_personnel;
//use App\Models\tables\desk_officer;

class reports extends Model
{
    use HasFactory;
    protected $table = 'reports';

    public function getCrime(){
      return $this->hasOne(crime::class,'crime_id','id')
    }

    public function getBrgyPersonnel(){
      return $this->hasOne(brgy_personnel::class,'brgy_personnel_id','id')
    }

    public function getDeskOfficer(){
      return $this->hasOne(desk_officer::class,'desk_officer_id','id')
    }

    public function getRemarks(){
      return $this->hasMany(remarks::class)
    }

    public function getEvidence(){
      return $this->hasMany(evidence::class)
    }
}
