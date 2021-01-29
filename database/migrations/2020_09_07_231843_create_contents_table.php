<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('PageName')->nullable();
            $table->text('HeadingOne')->nullable();
            $table->text('HeadingTwo')->nullable();
            $table->text('HeadingThree')->nullable();
            $table->text('HeadingFour')->nullable();
            $table->text('HeadingFive')->nullable();
            $table->text('HeadingSix')->nullable();
            $table->text('HeadingSeven')->nullable();
            $table->text('HeadingEight')->nullable();
            $table->longText('ContentOne')->nullable();
            $table->longText('ContentTwo')->nullable();
            $table->longText('ContentThree')->nullable();
            $table->longText('ContentFour')->nullable();
            $table->integer('PhoneOne')->nullable();
            $table->integer('PhoneTwo')->nullable();
            $table->integer('PhoneThree')->nullable();
            $table->text('Address')->nullable();
            $table->text('AddressTwo')->nullable();
            $table->text('AddressThree')->nullable();
            $table->text('Email')->nullable();
            $table->text('EmailTwo')->nullable();
            $table->text('EmailThree')->nullable();
            $table->text('HeaderImageUrl')->nullable();
            $table->text('HeaderImageUrlTwo')->nullable();
            $table->text('HeaderImageUrlThree')->nullable();
            $table->text('HeaderImageUrlFour')->nullable();
            $table->text('HeaderImageUrlFive')->nullable();
            $table->text('HeaderImageUrlSix')->nullable();
            $table->text('HeaderImageUrlSeven')->nullable();
            $table->text('HeaderImageUrlEight')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
