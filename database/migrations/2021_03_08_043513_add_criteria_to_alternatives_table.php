<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCriteriaToAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alternatives', function (Blueprint $table) {
            $table->float('vegetasi_area')->nullable()->after('kode');
            $table->float('volume_material')->nullable()->after('vegetasi_area');
            $table->float('luas_daerah')->nullable()->after('volume_material');
            $table->float('volume_tampungan')->nullable()->after('luas_daerah');
            $table->float('lama_operasi')->nullable()->after('volume_tampungan');
            $table->float('harga_air')->nullable()->after('lama_operasi');
            $table->float('akses_jalan')->nullable()->after('harga_air');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alternatives', function (Blueprint $table) {
            $table->dropColumn('vegetasi_area');
            $table->dropColumn('volume_material');
            $table->dropColumn('luas_daerah');
            $table->dropColumn('volume_tampungan');
            $table->dropColumn('lama_operasi');
            $table->dropColumn('harga_air');
            $table->dropColumn('akses_jalan');
        });
    }
}
