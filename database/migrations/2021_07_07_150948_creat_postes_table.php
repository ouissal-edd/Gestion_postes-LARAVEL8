<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPostesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->foreignId('fk_user')->constrained('users');
            $table->foreignId('fk_cmnt')->constrained('cmnt');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("postes", function (Blueprint $table) {
            $table->dropConstrainedForeignId("fk_user");
            $table->dropConstrainedForeignId("fk_cmnt");
        });
        Schema::dropIfExists('postes');
    }
}
