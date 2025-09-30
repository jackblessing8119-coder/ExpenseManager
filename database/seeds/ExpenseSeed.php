<?php

use Illuminate\Database\Seeder;

class ExpenseSeed extends Seeder
{
    public function run()
    {
        $items = [
            ['id' => 1, 'expense_category_id' => 1, 'entry_date' => '2025-09-30', 'amount' => 100, 'created_by_id' => 1],
            ['id' => 2, 'expense_category_id' => 2, 'entry_date' => '2025-09-30', 'amount' => 50, 'created_by_id' => 1],
            ['id' => 3, 'expense_category_id' => 3, 'entry_date' => '2025-09-30', 'amount' => 75, 'created_by_id' => 1],
            ['id' => 4, 'expense_category_id' => 4, 'entry_date' => '2025-09-30', 'amount' => 120, 'created_by_id' => 1],
            ['id' => 5, 'expense_category_id' => 5, 'entry_date' => '2025-09-30', 'amount' => 60, 'created_by_id' => 1],
            ['id' => 6, 'expense_category_id' => 6, 'entry_date' => '2025-09-30', 'amount' => 200, 'created_by_id' => 1],
            ['id' => 7, 'expense_category_id' => 7, 'entry_date' => '2025-09-30', 'amount' => 90, 'created_by_id' => 1],
            ['id' => 8, 'expense_category_id' => 8, 'entry_date' => '2025-09-30', 'amount' => 30, 'created_by_id' => 1],
        ];
        foreach ($items as $item) {
            \App\Expense::updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
