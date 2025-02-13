<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('lists', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('position')->default(0);
    $table->foreignId('board_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});