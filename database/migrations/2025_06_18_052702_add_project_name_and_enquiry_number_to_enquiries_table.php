<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->string('project_name')->nullable()->after('id');         // Or wherever you'd like
            $table->string('enquiry_number')->unique()->after('project_name');
        });
    }

    public function down(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->dropColumn(['project_name', 'enquiry_number']);
        });
    }
};
