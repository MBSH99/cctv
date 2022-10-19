<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->date('report_tarikh');
            $table->time('report_masa');
            $table->string('report_lokasi');
            $table->string('report_daerah');
            $table->string('report_kaduan');
            $table->string('report_saduan');
            $table->string('report_jabatan');
            $table->time('report_masalapor');
            $table->string('report_laporan');
            $table->string('report_image');
            $table->string('report_status');
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
        Schema::dropIfExists('reports');
    }
}
