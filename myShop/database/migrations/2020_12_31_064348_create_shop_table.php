<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->bigInteger('company_id')->unsigned(); //会社ID
						$table->string('name',30)->nullable(); //店舗名
						$table->string('postal_cd',10)->nullable(); //郵便番号
						$table->string('prefecture',10)->nullable(); //都道府県
						$table->string('city',50)->nullable(); //市町村
						$table->string('area',50)->nullable(); //町域
						$table->string('address',50)->nullable(); //番地
						$table->string('tel',12)->nullable(); //電話番号
						$table->string('email',255)->nullable(); //E-mail
						
						$table->string('opening_time',10)->nullable(); //営業時間（From）
						$table->string('closing_time',10)->nullable(); //営業時間（to）
						$table->string('time_break',10)->nullable(); //予約表時間区切り
						$table->timestamps(); //登録日付
						$table->softDeletes(); //削除日付
						$table->foreign("company_id")->references("id")->on("companies");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}
