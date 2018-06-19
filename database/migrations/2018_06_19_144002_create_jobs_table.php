<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('jobs', function (Blueprint $table) {
        Schema::connection('mongodb')->create('jobs', function ($collection) {
            $collection->string('queue')->index();
            $collection->longText('payload');
            $collection->unsignedTinyInteger('attempts');
            $collection->unsignedInteger('reserved_at')->nullable();
            $collection->unsignedInteger('available_at');
            $collection->unsignedInteger('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
