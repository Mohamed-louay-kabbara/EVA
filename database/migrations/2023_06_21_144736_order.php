<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('user_id')->unsigned();
        $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        // $table->bigInteger('shose_id')->unsigned();
        $table->foreignId('shose_id')->references('id')->on('shoes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('type_delivery');
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        //
    }
};
