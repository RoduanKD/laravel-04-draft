<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArabicToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('title', 'title_en');
            $table->string('title_ar')->after('title');
            $table->renameColumn('content', 'content_en');
            $table->string('content_ar')->after('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title_ar');
            $table->dropColumn('content_ar');
            $table->renameColumn('title_en', 'title');
            $table->renameColumn('content_en', 'content');
        });
    }
}
