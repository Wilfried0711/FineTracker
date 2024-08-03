<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('amount', 13, 2);
            $table->string('description')->nullable();
            $table->boolean('is_recurrent')->default(false);
            $table->date('expense_date');
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->after('category_id');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropForeign(['user_id']); 
            $table->dropColumn('user_id');
        });
    }
};
