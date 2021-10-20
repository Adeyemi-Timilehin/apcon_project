<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RegistrationDetails
 * @package App\Models
 * @version June 1, 2021, 6:27 pm UTC
 *
 * @property integer $user_id
 * @property string $referee_name
 * @property string $referee_email
 * @property string $referee_phone
 * @property string $referee_company
 * @property string $school_attended
 * @property string $school_completed
 * @property string $letter_of_reference
 * @property string $registration_document
 * @property string $cac
 * @property string $memorandum
 * @property string $directors_details
 * @property string $staff_details
 * @property string $financial_report
 * @property string $tax_clearance
 * @property string $compliance_letter
 */
class RegistrationDetails extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'registration_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'referee_name',
        'referee_email',
        'referee_phone',
        'referee_company',
        'school_attended',
        'school_completed',
        'letter_of_reference',
        'registration_document',
        'cac',
        'memorandum',
        'directors_details',
        'staff_details',
        'financial_report',
        'tax_clearance',
        'compliance_letter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        // 'referee_name' => 'string',
        // 'referee_email' => 'string',
        // 'referee_phone' => 'string',
        // 'referee_company' => 'string',
        // 'school_attended' => 'string',
        // 'school_completed' => 'date',
        // 'letter_of_reference' => 'string',
        // 'registration_document' => 'string',
        // 'cac' => 'string',
        // 'memorandum' => 'string',
        // 'directors_details' => 'string',
        // 'staff_details' => 'string',
        // 'financial_report' => 'string',
        // 'tax_clearance' => 'string',
        // 'compliance_letter' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
