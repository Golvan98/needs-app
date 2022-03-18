<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\Pivot;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyquestion_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('question_survey_id');
            $table->unsignedBigInteger('answer_id');


            $table->foreign('question_survey_id')
            ->references('id')
            ->on('question_survey')
            ->onDelete('cascade');

            $table->foreign('answer_id')
            ->references('id')
            ->on('answers')
            ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveyquestion_answers');
    }
};
