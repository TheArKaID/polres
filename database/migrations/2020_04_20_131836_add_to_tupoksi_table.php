<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToTupoksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tupoksi', function (Blueprint $table) {
            $table->text('deskripsi')->after('tupoksi');
            $table->string('gambar')->after('deskripsi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tupoksi', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
            $table->dropColumn('gambar');
        });
    }
}
