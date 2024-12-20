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
        Schema::create('prediction_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('HighBP');
            $table->float('HighChol');
            $table->float('BMI');
            $table->float('Stroke');
            $table->float('HeartDiseaseorAttack');
            $table->float('PhysActivity');
            $table->float('GenHlth');
            $table->float('PhysHlth');
            $table->float('DiffWalk');
            $table->integer('Age');
            $table->integer('Education');
            $table->integer('Income');
            $table->integer('prediction');
            $table->decimal('confidence', 5, 2); 
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prediction_histories');
    }
};
