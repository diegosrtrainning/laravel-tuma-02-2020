<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFuncionariosAddRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function(Blueprint $table){
            $table->bigInteger('perfil_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
 
            $table->foreign('perfil_id')
            ->references('id')
            ->on('perfis');
 
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
