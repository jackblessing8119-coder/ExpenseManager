<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $this->call(RoleSeed::class);
    $this->call(UserSeed::class);
    $this->call(CurrencySeed::class);
    $this->call(ExpenseCategorySeeder::class);
    $this->call(IncomeCategorySeeder::class);
    $this->call(ExpenseSeeder::class);
    $this->call(IncomeSeeder::class);
    }
}
