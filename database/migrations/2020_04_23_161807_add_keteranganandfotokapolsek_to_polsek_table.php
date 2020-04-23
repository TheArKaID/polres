<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeteranganandfotokapolsekToPolsekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polsek', function (Blueprint $table) {
            $table->text('keterangan')->after("wilayah_id");
            $table->string("fotokapolsek")->after("kapolsek");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polsek', function (Blueprint $table) {
            $table->dropColumn('keterangan');
            $table->dropColumn('fotokapolsek');
        });
    }
}
