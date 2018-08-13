<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->after('name');        
            $table->string('birthdate')->after('gender');        
            $table->string('image')->after('birthdate');        
            $table->string('phone')->after('image');        
            $table->string('national_id')->after('phone');        
            $table->string('current_address')->after('national_id');        
            $table->string('city')->after('current_address');        
            $table->string('country')->after('city');        
            $table->string('degree')->after('country');        
            $table->string('subject')->after('degree');        
            $table->string('institution')->after('subject');        
            $table->integer('department_id')->after('password')->unsigned(); 
            $table->integer('designation_id')->after('department_id')->unsigned();        
            $table->string('join_date')->after('designation_id')->nullable();        
            $table->string('onLeave')->after('join_date')->default('no');        
            $table->integer('existLeave')->after('onLeave')->default(28)->unsigned();        
            $table->integer('useLeave')->after('existLeave')->default(0)->unsigned();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'birthdate', 'image', 'phone', 'national_id', 'current_address', 'city', 'country', 'degree', 'subject', 'institution', 'department_id', 'designation_id','join_date','onLeave', 'existLeave', 'useLeave']);        
        });
    }
}
