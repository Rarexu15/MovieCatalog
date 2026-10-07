<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('movies', function (Blueprint $table) {
        $table->string('customer_name')->nullable()->after('description');
        $table->date('rental_date')->nullable()->after('customer_name');
        $table->date('return_date')->nullable()->after('rental_date');
        $table->string('rental_status')->default('Available')->after('return_date');
    });
}

public function down()
{
    Schema::table('movies', function (Blueprint $table) {
        $table->dropColumn([
            'customer_name',
            'rental_date',
            'return_date',
            'rental_status'
        ]);
    });
}
};