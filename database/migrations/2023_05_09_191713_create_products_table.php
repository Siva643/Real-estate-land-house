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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("propertytype");
            // $table->string("price");
            // $table->string("category");
            // $table->string("description");
            $table->string("sno");
            $table->string("cent");
            $table->string("location");
            $table->string("image");
            $table->string("price");

            $table->string("totalsqft");
            $table->string("landsqft");
            $table->string("roadarea");
            $table->string("howmanyfeetofroad");
            $table->string("breadthandlength");
            $table->string("direction");
            $table->string("description");
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
