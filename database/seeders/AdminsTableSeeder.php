<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Input Records for SuperAdmin, Admin and Vendor
        $adminRecords = [
            ['id'=>1, 'name'=>'Admin','type'=>'admin', 'mobile'=>'07031465663', 'email'=>'admin@canadianwealth.com', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],

            ['id'=>2, 'name'=>'Paid User','type'=>'paid_user', 'mobile'=>'07031465664', 'email'=>'paid_user@canadianwealth.com', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],

            ['id'=>3, 'name'=>'Free User','type'=>'free_user', 'mobile'=>'07031465665', 'email'=>'free_user@canadianwealth.com', 'password'=>'$2a$12$hAYBil.osKyWkzxehs0i/eGNzcsWgdlBuUo3sxHV.PwhXX92UvFiG', 'image'=>'', 'status'=>1],
        ]; 
        Admin::insert($adminRecords);
    }
}
