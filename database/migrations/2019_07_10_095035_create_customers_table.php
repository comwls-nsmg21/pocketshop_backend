<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('PK');

            $table->string('email')->comment('이메일')->unique();
            $table->string('name')->comment('이름')->nullable(false);
            $table->string('password')->comment('Password');
            $table->enum('state', array('nomal', 'black','out'))->default('nomal')->comment('상태값 (nomall:일반, black:블랙유저, out:탈퇴)');
            $table->string('postcode')->comment('우편코드')->nullable(true);
            $table->string('address1')->comment('기본주소')->nullable(true);
            $table->string('address2')->comment('상세주소')->nullable(true);
            $table->string('phone')->comment('휴대전화');
            $table->boolean('identity')->comment('본인인증')->default(false);

            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('customers');
    }
}
