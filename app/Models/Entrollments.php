<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrollments extends Model
{
    protected $table = 'entrollments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'student_id','join_date','fee'];
    use HasFactory;

    public function payment()
    {
       return $this->hasMany(Payment::class);
    }


    public function student()
    {

        return $this->belongsTo(Student::class);
    }

    public function batches()
    {

        return $this->belongsTo(Batches::class);
    }

}

