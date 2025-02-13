<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('boards', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});