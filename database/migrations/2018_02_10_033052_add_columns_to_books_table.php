<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->longText('region');
            $table->longText('country');
            $table->longText('operator');
            $table->longText('brand');
            $table->longText('host_network');
            $table->longText('technology');
            $table->longText('mvno_category');
            $table->longText('mvno_type');
            $table->longText('subscriber');
            $table->longText('parent_owner');
            $table->longText('email');
            $table->longText('telephone');
            $table->longText('fax');
            $table->longText('linkedin');
            $table->longText('website');
            $table->longText('headquarter');
            $table->longText('established');
            $table->longText('regulator');
            $table->longText('company_overview');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
}
