<?php

namespace Database\Factories;

use App\Models\RegistrationDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegistrationDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            // 'user_id' => $this->faker->randomDigitNotNull,
            //'referee_name' => $this->faker->word,
        // 'referee_email' => $this->faker->word,
        // 'referee_phone' => $this->faker->word,
        // 'referee_company' => $this->faker->word,
        // 'school_attended' => $this->faker->word,
        // 'school_completed' => $this->faker->word,
        // 'letter_of_reference' => $this->faker->word,
        // 'registration_document' => $this->faker->word,
        // 'cac' => $this->faker->word,
        // 'memorandum' => $this->faker->word,
        // 'directors_details' => $this->faker->word,
        // 'staff_details' => $this->faker->word,
        // 'financial_report' => $this->faker->word,
        // 'tax_clearance' => $this->faker->word,
        // 'compliance_letter' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
