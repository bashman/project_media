<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminUserProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user_project', function (Blueprint $table) {

            $table->bigInteger('project_id')->index();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->bigInteger('admin_user_id')->index();
            $table->foreign('admin_user_id')->references('id')->on('admin_users');

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
        Schema::dropIfExists('admin_user_project');
    }
}
