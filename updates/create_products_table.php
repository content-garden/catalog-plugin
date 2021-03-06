<?php namespace Kodji\Catalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::dropIfExists('kodji_catalog_products');
        Schema::create('kodji_catalog_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->string('partID')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->float('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->boolean('is_shown')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kodji_catalog_products');
    }

}
