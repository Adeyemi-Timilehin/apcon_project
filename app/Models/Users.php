<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Users
 * @package App\Models
 * @version May 31, 2021, 2:07 pm UTC
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $user_type
 * @property integer $is_approved
 */
class Users extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'name',
        'email',
        'password',
        'user_type',
        'is_approved'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'user_type' => 'string',
        'is_approved' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'user_type' => 'required',
        'is_approved' => 'required'
    ];

    public static $update_rules = [
        
    ];

    
}
