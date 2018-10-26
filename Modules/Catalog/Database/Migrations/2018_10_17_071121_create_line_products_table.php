<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineProductsTable extends Migration
{
    private $tableName = 'line_products';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('remote_id')->nullable();
          $table->string('title');
          $table->integer('sort');
          $table->integer('type_product_id')->length(11)->unsigned();
          $table->integer('producer_id')->length(11)->unsigned();
          $table->text('description')->nullable();
          $table->string('price_amount')->nullable()->comment('Размерность');
          $table->string('url_key', 255)->unique();
          $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
          $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
          $table->foreign('type_product_id')->references('id')->on('type_products')->onDelete('cascade');
          $table->foreign('producer_id')->references('id')->on('producers')->onDelete('cascade');
          $table->softDeletes();
        });

        DB::statement("ALTER TABLE `$this->tableName` comment 'Линейки продукции'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table($this->tableName, function (Blueprint $table) {
        $table->dropForeign('line_products_type_product_id_foreign');
        $table->dropForeign('line_products_producer_id_foreign');
      });
      Schema::dropIfExists($this->tableName);
    }
}
