<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->decimal('price', 5, 2);
        });

        $articles = [
            [
                "price" => 2.43
            ],
            [
                "price" => 4.28
            ],
            [
                "price" => 3.12
            ],
            [
                "price" => 1.99
            ],
            [
                "price" => 4.4
            ],
            [
                "price" => 5.05
            ],
            [
                "price" => 2.56
            ],
            [
                "price" => 1.29
            ],
            [
                "price" => 2.38
            ],
            [
                "price" => 2.14
            ],
            [
                "price" => 2.88
            ],
            [
                "price" => 1.89
            ],
            [
                "price" => 3.22
            ],
            [
                "price" => 3.49
            ],
            [
                "price" => 3.69
            ],
        ];
        DB::table('users')->insert($articles);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->decimal('price', 5, 2);
        });
    }
}
