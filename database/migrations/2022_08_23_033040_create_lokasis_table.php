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
        Schema::create('lokasis', function (Blueprint $table) {
            $table->increments('lokasi_id');
            $table->string('lokasi_kod')->nullable();
            $table->string('lokasi_detail')->nullable();
            $table->string('lokasi_status');
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
        Schema::dropIfExists('lokasi');
    }
};
