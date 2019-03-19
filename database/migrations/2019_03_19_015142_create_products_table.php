<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    // Para criar uma migration, basta executar o comando: php artisan make:migration {nome da migração}.

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Para subir a migração basta executar o comando: php artisan migrate.
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            //Criando novas colunas
            $table->string('name', 100);
            $table->double('price', 6,2);
            $table->text('description')->nullable();

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
        // Para descer a versão da migration, basta executar o comando: php artisan migrate:rollback.
        Schema::dropIfExists('products');
    }
}
