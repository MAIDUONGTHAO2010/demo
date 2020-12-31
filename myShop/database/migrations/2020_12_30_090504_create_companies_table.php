<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->nullable(); //会社名
			$table->string('postal_cd',10)->nullable(); //郵便番号
			$table->string('prefecture',10)->nullable(); //都道府県
			$table->string('city',50)->nullable(); //市町村
			$table->string('area',50)->nullable(); //町域
			$table->string('address',50)->nullable(); //番地
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
