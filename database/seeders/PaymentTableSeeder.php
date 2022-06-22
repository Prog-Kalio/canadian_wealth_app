<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Input Records for SuperAdmin, Admin and Vendor
        $paymentRecords = [
            ['id'=>1,'email'=>'free@canadianwealth.com', 'amount'=>4000, 'reference'=>'', 'name'=>'Free Payer', 'status'=>'success'],
        ]; 
        Payment::insert($paymentRecords);
    }
}
