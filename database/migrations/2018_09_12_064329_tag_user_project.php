<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TagUserProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_user_project', function (Blueprint $table) {
            $table->increments('tag_user_project_id');
            $table->timestamp('created_at')->userCurrent();
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('target_id');
            $table->enum('target_type', ['user_id', 'project_id']);
            $table->unique(['tag_id', 'target_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag_user_project');
    }
}
