<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::factory()->create(
            [
                'name'=>'1st yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'2nd yera'
            ]);
            Grade::factory()->create(
            [
                'name'=>'3rd yera'
            ]);
            Grade::create(
            [
                'name'=>'4th yera'
            ]);
            Grade::create(
            [
                'name'=>'5th yera'
            ]);
            Grade::create(
            [
                'name'=>'6th yera'
            ]);
            Grade::create(
            [
                'name'=>'7th yera'
            ]);
            Grade::create(
            [
                'name'=>'8th yera'
            ]);
            Grade::create(
            [
                'name'=>'9th yera'
            ]);

            Grade::create(
            [
                'name'=>'10th yera'
            ]);
            Grade::create(
            [
                'name'=>'11th yera'
            ]);

            Grade::create(
            [
                'name'=>'12th yera'
            ]);
    }
}
