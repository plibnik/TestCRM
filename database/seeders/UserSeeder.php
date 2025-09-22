<?php
// Цей сідер потрібен, тому що у мене наразі Users Ларавелу прив'язані до моїх "менеджерів" Managers
// коли створюється нова БД, migrate:fresh, мені будуть потрібні "живі" манагери, щоб на них
// постворювати фейкові замовлення; але я вводжу у БД зв'язок В ОДИН БІК від менеджера до юзера
// (кожен менеджер має відповідність у users, ну щоб він міг логінитися! -- так я виконаю вимогу
// з ТЗ, що "кожен менеджер може переглядати тільки власні замовлення"
// TODO: також додам потім супер-юзера, це той, що зможе додавати і видаляти менеджерів,
// а також йому буде видно всі дані, і у нього будуть фіксовані логін та пароль
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create one Laravel user with admin:admin L/P for testing

        User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@serious.gov',
            'password'=>Hash::make('admin')  /// this is BAD for safety but I won't forget it during demos; FIXME
        ]);
    }
}
