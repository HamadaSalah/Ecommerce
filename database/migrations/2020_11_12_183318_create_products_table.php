<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('photo')->nullable()->default('no-image.png');
            $table->string('description')->nullable();
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('currnecy')->nullable();
            $table->decimal('price')->default(0);
            $table->integer('stock')->default(0);
            $table->decimal('offer', 5, 2)->nullable()->default(0);
            $table->date('start_offer')->nullable();
            $table->date('end_offer')->nullable();
            $table->enum('status', ['pending', 'refused', 'actve'])->default('pending');
            $table->string('refused_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
