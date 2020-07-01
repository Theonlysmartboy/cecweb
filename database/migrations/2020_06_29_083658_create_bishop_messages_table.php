<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBishopMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bishop_messages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('name', 100);
            $table->string('avatar', 100);
            $table->$table->longText('text_message');
            $table->string('video_message', 100)->nullable();
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
        Schema::dropIfExists('bishop_messages');
    }
}
