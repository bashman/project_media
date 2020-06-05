<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_media', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->index()->nullable();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('name')->index()->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['1', '2', '3', '4', '5', '6', '7']);
            $table->string('path')->index();
            $table->boolean('active')->nullable()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_media');
    }
}
