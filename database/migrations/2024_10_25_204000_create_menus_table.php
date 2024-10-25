<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();  // Equivalent to `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->string('title', 255)->nullable();  // Equivalent to `title` VARCHAR(255) DEFAULT NULL
            $table->text('text')->nullable();  // Equivalent to `text` TEXT DEFAULT NULL
            $table->integer('position')->default(0);  // Equivalent to `position` INT(11) NOT NULL DEFAULT 0
            $table->tinyInteger('status')->default(0);  // Equivalent to `status` TINYINT(2) NOT NULL DEFAULT 0
            $table->unsignedBigInteger('parent_id')->default(0);  // Equivalent to `parent_id` INT(11) NOT NULL DEFAULT 0
            $table->timestamps();  // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
