<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::connection('mongodb')->create('users', function ($collection) {
            $collection->index('name');

            $collection->string('email')->unique();
            $collection->string('password');
            $collection->rememberToken();
            $collection->timestamps();
            $collection->fist_login()->default(0);
            $collection->is_verified()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::connection('mongodb')->drop(['users']);
    }
}
