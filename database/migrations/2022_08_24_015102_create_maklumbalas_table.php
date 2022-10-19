<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumbalas', function (Blueprint $table) {
            $table->increments('maklumbalas_id');
            $table->string('maklumbalas_date');
            $table->string('maklumbalas_jabatan');
            $table->string('maklumbalas_catatan');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_timestamp'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_timestamp ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maklumbalas');
    }
};
