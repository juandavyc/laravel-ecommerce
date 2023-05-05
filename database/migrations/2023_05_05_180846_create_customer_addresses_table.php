<?php

use App\Models\Country;
use App\Models\Customer;
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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('type',45);
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('city',255);
            $table->string('state',45);
            $table->string('zipcode',45);
            $table->foreignIdFor(Customer::class, 'customer_id');
            $table->foreignIdFor(Country::class, 'country_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};
