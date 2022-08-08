<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = Company::all();
        $faker = Faker::create();
        $contacts = [];

        foreach ($companies as $company) {
            foreach (range(1, 5) as $index) {
                $contact = [
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'phone' => $faker->phoneNumber(),
                    'email' => $faker->email(),
                    'address' => $faker->address(),
                    'company_id' => $company->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                $contacts[] = $contact;
            }
        }
        Contact::insert($contacts);
    }
}
