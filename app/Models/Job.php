<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
   public function employer()
   {
    return $this->belongsTo(Employer::class);
   }

   public function jobs()
   {
    return $this->hasMany(Job::class);
   }
}
