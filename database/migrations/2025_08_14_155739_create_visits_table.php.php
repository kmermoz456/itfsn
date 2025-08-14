<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('visits', function (Blueprint $t) {
      $t->id();
      $t->string('ip', 45)->index();
      $t->string('user_agent', 255)->nullable();
      $t->string('url', 1024);
      $t->timestamp('visited_at')->useCurrent()->index();
      $t->timestamps();
    });
  }
  public function down(): void { Schema::dropIfExists('visits'); }
};

