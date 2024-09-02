<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            // Remove the sentiment_score column
            $table->dropColumn('sentiment_score');
            
            // Set default values for other columns
            $table->string('name')->default('Anonymous')->change();
            $table->string('email')->default('no-reply@example.com')->change();
            $table->string('subject')->default('No Subject')->change();
            $table->text('message')->default('No message')->change();
        });
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            // Re-add the sentiment_score column
            $table->integer('sentiment_score')->nullable()->after('message');
            
            // Revert default values
            $table->string('name')->default(null)->change();
            $table->string('email')->default(null)->change();
            $table->string('subject')->default(null)->change();
            $table->text('message')->default(null)->change();
        });
    }
}
