<?php
namespace Database\Seeders;

use App\Models\User;
//use illuminate\Database\Console\Seedes\MithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**Seed the application's database.
     */
public Function run(): void
{
// User::factory(10)-> create();
// User::factory()->create([
// 'name' => 'Test User',
// 'emal' => test@example.com',
//]);
$this->call(UserSeeder::class);

}
}
