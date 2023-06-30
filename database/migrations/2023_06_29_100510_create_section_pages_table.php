<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('title_client')->nullable();
            $table->string('subtitle_client')->nullable();
            $table->string('title_portfolio')->nullable();
            $table->string('subtitle_portfolio')->nullable();
            $table->string('title_category')->nullable();
            $table->string('subtitle_category')->nullable();
            $table->string('title_about')->nullable();
            $table->string('subtitle_about')->nullable();
            $table->string('title_contact')->nullable();
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
        Schema::dropIfExists('section_pages');
    }
}
