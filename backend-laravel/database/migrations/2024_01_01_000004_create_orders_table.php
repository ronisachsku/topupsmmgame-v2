<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('duration_id')->constrained('service_durations')->onDelete('cascade');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone')->nullable();
            $table->text('account_email');
            $table->text('account_password');
            $table->text('notes')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('status_order', ['Pending', 'Proses', 'Selesai', 'Selesai Sebagian', 'Gagal', 'Dibatalkan'])->default('Pending');
            $table->enum('payment_status', ['Unpaid', 'Paid', 'Expired'])->default('Unpaid');
            $table->string('payment_method')->nullable();
            $table->string('payment_reference')->nullable();
            $table->timestamp('payment_expired_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('order_number');
            $table->index('status_order');
            $table->index('payment_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
