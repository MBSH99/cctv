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
        Schema::create('kakitangans', function (Blueprint $table) {
            $table->increments('kakitangan_id');
            $table->string('kakitangan_no');
            $table->string('kakitangan_name');
            $table->string('kakitangan_jenis');
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
        Schema::dropIfExists('kakitangan');
    }
};
