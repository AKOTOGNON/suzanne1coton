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
        Schema::table('ventes', function (Blueprint $table) {
            $table->unsignedBigInteger('paysan_id');
            $table->foreign('paysan_id')->references('id')->on('paysans');

             $table->unsignedBigInteger('user_id')->after('paysan_id');
            $table->foreign('user_id')->references('id')->on('users');
        });


      Schema::table('stockadmins', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
        });


        Schema::table('stocksecretaires', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
        });



        Schema::table('carnets', function (Blueprint $table) {
            $table->unsignedBigInteger('paysan_id');
            $table->foreign('paysan_id')->references('id')->on('paysans');
        });

        Schema::table('dettes', function (Blueprint $table) {
            $table->unsignedBigInteger('paysan_id');
            $table->foreign('paysan_id')->references('id')->on('paysans');

            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
        });

        Schema::table('distributions', function (Blueprint $table) {
            $table->unsignedBigInteger('paysan_id');
            $table->foreign('paysan_id')->references('id')->on('paysans');

            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');

             $table->unsignedBigInteger('user_id')->after('produit_id');
            $table->foreign('user_id')->references('id')->on('users');

        });


         Schema::table('paysans', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('nom'); // Adjust position as needed
        });


          Schema::table('produits', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('nom_produit'); // Adjust position as needed
        });



          Schema::table('payements', function (Blueprint $table) {
             $table->unsignedBigInteger('paysan_id');
            $table->foreign('paysan_id')->references('id')->on('paysans');

            $table->unsignedBigInteger('dette_id');
            $table->foreign('dette_id')->references('id')->on('dettes');

             $table->unsignedBigInteger('vente_id');
            $table->foreign('vente_id')->references('id')->on('ventes');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->dropColumn('paysan_id');

        });




        Schema::table('distributions', function (Blueprint $table) {
            $table->dropColumn('paysan_id');
            $table->dropColumn('produit_id');
        });
          Schema::table('paysans', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });


        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('annee', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
          Schema::table('payements', function (Blueprint $table) {
            $table->dropColumn('annee_id');
            $table->dropColumn('paysan_id');
            $table->dropColumn('dette_id');
            $table->dropColumn('vente_id');
        });
    }
};
