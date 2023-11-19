<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 13)->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('number_of_pages');
            $table->date('publication_date');
            $table->float('regular_price');
            $table->float('sale_price')->nullable();
            $table->integer('quantity')->default(0);
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('publisher_id')->unsigned();
            $table->timestamps();
            $table->foreign('language_id')->references('id')->on('languages')->cascadeOnDelete();
            $table->foreign('publisher_id')->references('id')->on('publishers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
