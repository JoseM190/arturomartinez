<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * @package App\Models
 * @version November 24, 2020, 1:46 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $assistances
 * @property \Illuminate\Database\Eloquent\Collection $details
 * @property \Illuminate\Database\Eloquent\Collection $exams
 * @property string $names_student
 * @property string $surnames_student
 * @property integer $ci
 * @property string $email
 * @property string $password
 * @property string $birthdate_student
 * @property string $gender_student
 * @property integer $cellular_student
 */
class Student extends Model
{
    use SoftDeletes;

    public $table = 'students';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'names_student',
        'surnames_student',
        'ci',
        'email',
        'password',
        'birthdate_student',
        'gender_student',
        'cellular_student'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'names_student' => 'string',
        'surnames_student' => 'string',
        'ci' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'birthdate_student' => 'datetime',
        'gender_student' => 'string',
        'cellular_student' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'names_student' => 'required|string|max:30',
        'surnames_student' => 'required|string|max:30',
        'ci' => 'required|integer|max:255',
        'email' => 'required|string|max:191',
        'password' => 'required|string|max:20',
        'birthdate_student' => 'required',
        'gender_student' => 'required|string|max:1',
        'cellular_student' => 'required|integer|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function assistances()
    {
        return $this->hasMany(\App\Models\Assistance::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function details()
    {
        return $this->hasMany(\App\Models\Detail::class, 'student1_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function exams()
    {
        return $this->hasMany(\App\Models\Exam::class, 'student2_id');
    }
}
