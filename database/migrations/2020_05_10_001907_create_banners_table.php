<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable()->default(null);
            $table->text('img')->nullable()->default(null);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
        DB::table('banners')->insert([
            ['name' => 'الهيدر'],
            ['name' => 'ب1'],
            ['name' => 'ب2'],
            ['name' => 'ب3'],
            ['name' => 'الفوتر'],
            ['name' => 'الموضوع'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
