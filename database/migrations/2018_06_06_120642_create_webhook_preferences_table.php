<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebhookPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webhook_preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('webhook_id')->unsigned()->index();
            $table->boolean('video_encoded');
            $table->timestamps();

            $table->foreign('webhook_id')->references('id')->on('webhooks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webhook_preferences');
    }
}
