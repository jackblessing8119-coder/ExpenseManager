<?php

use Illuminate\Database\Seeder;

class IncomeCategorySeed extends Seeder
{
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Salary', 'created_by_id' => 1],
            ['id' => 2, 'name' => 'Business', 'created_by_id' => 1],
            ['id' => 3, 'name' => 'Investment', 'created_by_id' => 1],
            ['id' => 4, 'name' => 'Gift', 'created_by_id' => 1],
            ['id' => 5, 'name' => 'Freelance', 'created_by_id' => 1],
            ['id' => 6, 'name' => 'Rental Income', 'created_by_id' => 1],
            ['id' => 7, 'name' => 'Interest', 'created_by_id' => 1],
            ['id' => 8, 'name' => 'Other', 'created_by_id' => 1],
        ];
        foreach ($items as $item) {
            \App\IncomeCategory::updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
