<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_bls', function (Blueprint $table) {
            $table->id();
            $table->foreignId("article_id")->constrained();
            $table->foreignId("commande_id")->constrained();
            $table->double("qte")->default(0);
            $table->double("prix_vente_ht")->default(0);
            $table->double("remise")->default(0);
            $table->double("tva")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_bls');
    }
};
