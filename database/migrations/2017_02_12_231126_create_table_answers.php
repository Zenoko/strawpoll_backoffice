<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \Colors\RandomColor;

class CreateTableAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('answers')) {
            Schema::create('answers', function(Blueprint $table) {
                // Columns
                $table->increments('id');
                $table->integer('questions_id');
                $table->text('answer');
                $table->integer('position')->default(0);
                $table->string('color', 7);

                // Constraints
                $table->foreign('questions_id')
                    ->references('id')
                    ->on('questions')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                // Index
                $table->index('color', 'color_idx');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
