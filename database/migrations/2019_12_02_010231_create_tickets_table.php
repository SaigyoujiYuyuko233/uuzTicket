<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('title')->comment('工单名称');
            $table->integer('status')->comment('工单状态');
            $table->integer('temp_id')->comment('使用的模板ID');
            $table->string('owner_name')->comment('工单提交者');
            $table->longText('content')->comment('工单内容');
            $table->dateTime('create_at')->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
