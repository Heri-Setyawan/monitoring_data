<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitors', function (Blueprint $table) {
            $table->renameColumn('voltage', 'voltage_rs');
            $table->renameColumn('current', 'voltage_st');
            $table->addColumn('double', 'voltage_tr');
            $table->addColumn('double', 'voltage_rn');
            $table->addColumn('double', 'voltage_sn');
            $table->addColumn('double', 'voltage_tn');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
