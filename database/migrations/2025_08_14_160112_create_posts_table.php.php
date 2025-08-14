<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('posts', function (Blueprint $t) {
      $t->id();
      $t->string('title');
      $t->string('slug')->unique();
      $t->string('cover_url')->nullable();
      $t->text('excerpt')->nullable();
      $t->longText('content')->nullable();
      $t->timestamp('published_at')->nullable()->index();
      $t->timestamps();
    });
  }
  public function down(): void { Schema::dropIfExists('posts'); }
};

