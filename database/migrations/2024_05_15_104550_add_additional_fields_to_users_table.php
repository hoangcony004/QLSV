<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // Thêm trường số điện thoại
            $table->string('phone_number')->nullable();
            // Thêm trường giới tính
            $table->string('gender')->nullable();
            // Thêm trường địa chỉ
            $table->string('address')->nullable();
            // Thêm trường năm sinh
            $table->date('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // Xóa các trường đã thêm
            $table->dropColumn('phone_number');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('dob');
        });
    }
};
