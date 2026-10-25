<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->tinyInteger('gender')->unsigned()->comment('性別：１：男性、２：女性');
            $table->date('birthdate');
            $table->string('prefecture');
            $table->tinyInteger('prefecture_code')->unsigned()->comment('都道府県コード');
            $table->string('tel',20)->unique();
            $table->string('email')->unique();
            $table->string('feature',50);
            $table->string('good_point',50);
            $table->string('bad_point',50);
            $table->text('memo',100)->nullable();
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
        Schema::dropIfExists('friends');
    }
}
