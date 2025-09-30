<?php

use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['id' => 1, 'income_category_id' => 1, 'entry_date' => '2025-09-30', 'amount' => 500, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 2, 'income_category_id' => 2, 'entry_date' => '2025-09-30', 'amount' => 200, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 3, 'income_category_id' => 3, 'entry_date' => '2025-09-30', 'amount' => 150, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 4, 'income_category_id' => 4, 'entry_date' => '2025-09-30', 'amount' => 100, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 5, 'income_category_id' => 5, 'entry_date' => '2025-09-30', 'amount' => 250, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 6, 'income_category_id' => 6, 'entry_date' => '2025-09-30', 'amount' => 300, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 7, 'income_category_id' => 7, 'entry_date' => '2025-09-30', 'amount' => 80, 'created_by_id' => 1, 'currency_id' => 4],
            ['id' => 8, 'income_category_id' => 8, 'entry_date' => '2025-09-30', 'amount' => 60, 'created_by_id' => 1, 'currency_id' => 4],
        ];
        foreach ($items as $item) {
            \App\Income::updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
