<?php

use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Food', 'created_by_id' => 1],
            ['id' => 2, 'name' => 'Transport', 'created_by_id' => 1],
            ['id' => 3, 'name' => 'Utilities', 'created_by_id' => 1],
            ['id' => 4, 'name' => 'Entertainment', 'created_by_id' => 1],
            ['id' => 5, 'name' => 'Healthcare', 'created_by_id' => 1],
            ['id' => 6, 'name' => 'Education', 'created_by_id' => 1],
            ['id' => 7, 'name' => 'Shopping', 'created_by_id' => 1],
            ['id' => 8, 'name' => 'Other', 'created_by_id' => 1],
        ];
        foreach ($items as $item) {
            \App\ExpenseCategory::updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
