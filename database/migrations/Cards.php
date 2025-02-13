<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::create('cards', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description')->nullable();
    $table->integer('position')->default(0);
    $table->foreignId('list_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});