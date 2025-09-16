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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();               // додати unique?
##            Очікує уточнення в О. -- чи треба дублювати , буде два автоінкременти
##            $table->bigInteger('internal_number')->autoIncrement(); // додав окреме поле внутрішнього номеру замовлення з автоінкрементом, як за ТЗ
            $table->foreignId('customer_id')->constrained('customers'); // FOREIGN KEY CUSTOMER_ID
            $table->foreignId('manager_id')->constrained('managers');   // FOREIGN KEY MANAGER_ID
            $table->date('creation_date'); // there is a timestamp, but in case this was a trick question,
                                                  // let's have date-only (w/o time) field too?
            $table->decimal('amount', 11, 2); // hope that's enough, up to 1 billion (UAH)
            $table->enum('status', ['new', 'working','completed','cancelled']);
            $table->text('comment'); // can be absent, other fields can't
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
