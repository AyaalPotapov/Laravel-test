<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->bigInteger('user_id')->unsigned()->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->foreignId('user_id')->constrained('users'); //связь таблицы с другой таблицой users при помощи внешнего ключа!
            
            $table->string('title');
            $table->text('content');

            $table->boolean('published')->default(true)->comment('Статус опубл-н или нет');
            $table->timestamp('published-at')->nullable()->comment('дата публикации поста');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
