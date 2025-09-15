<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // "Клієнт" з ТЗ буде "Customer", щоб не плутати зі службовими сенсами слова "клієнт" (БД тощо)
        // ТЗ: ПІБ; телефон; email; компанія (**ЦЕ БУДЕ ЗОВН. КЛЮЧ, ЗРОБИТИ ПІСЛЯ ТАБЛИЦІ "company")
        // ТЗ: примітка

        Schema::create('customers', function (Blueprint $table) {
            $table->id();                          // індекс для лінкування, ** додати унікальний?
                                                   // artisan migrate створив id з автоінкрементом, але не унікальний
            $table->string('full_name');    //ПІБ клієнта з Т.З., 256 вистачить
            $table->string('phone_number'); //потім зробити з валідацією, 256 вистачить
            $table->string('email_address');//теж валідацію потім
            // $table->foreignId('company_id')->constrained('company'); // РОЗКОМЕНТУВАТИ, коли створю табл. компаній FIXME
            $table->text('comment');        //тут довший, мало що там можуть тримати
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
