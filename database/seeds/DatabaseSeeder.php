<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Christian Montemayor',
            'email' => 'ch.@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => '10-17-7',
            'updated_at' => '10-17-7',
        }

         public function run()
    {
         DB::table('citizenship')->insert([
            'name' => 'John Michael Villas',
            'clients_id' => '0001',
            'created_at' => '12-12-12',
            'updated_at' => '12-12-12',
            
        }
            public function run()
    {
         DB::table('lawsuit')->insert([
            'name' => 'John Edward Olino',
            'casetobehandleds_id' => '0001',
             'created_at' => '12-12-12',
             'updated_at' => '12-12-12',
        }
             public function run()
    {
         DB::table('casetypes')->insert([
            'name' => 'Warlito Villamor',
            'casetobehandleds_id' => 'Civil',
             'created_at' => '12-12-12',
             'updated_at' => '12-12-12',
        }   

            public function run()
    {
         DB::table('categories')->insert([
            'name' => 'Ryan Lumido',
            'casetobehandleds_id' => 'VAWC',
             'created_at' => '12-12-12',
             'updated_at' => '12-12-12',
        }

        public function run()
    {
         DB::table('education')->insert([
            'name' => 'Patrick Rodriguez',
            'clients_id' => '0002',
             'created_at' => '12-12-12',
             'updated_at' => '12-12-12',
        }

        public function run()
    {
         DB::table('employees')->insert([
            'name' => 'Maria Jomalyn Chua',
            'efname' => 'Maria',
             'emname' => 'Jomalyn',
             'elname' => 'Chua',
             'email' => 'MJC@gmail.com',
             'position' => 'Secretary',
             'contact' => '09090104050',
             'clients_id' => '0003',
             'created_at' => '11-11-14',
             'updated_at' => '12-12-14',
        }

        public function run()
    {
         DB::table('involvements')->insert([
            'name' => 'Jeffrey Tam',
            'casetobehandleds_id' => 'criminal',
             'created_at' => '1-1-13',
             'updated_at' => '1-13-13',
        }

        public function run()
    {
         DB::table('languages')->insert([
            'name' => 'Jocelyn Flores',
            'clients_id' => '0004',
             'created_at' => '2-22-14',
             'updated_at' => '2-24-14',
        }

        public function run()
    {
         DB::table('positions')->insert([
            'name' => 'Mike Jordan',
            'employees_id' => '0005',
             'created_at' => '3-3-15',
             'updated_at' => '3-3-15',
        }

        public function run()
    {
         DB::table('requestts')->insert([
            'name' => 'Kobe Baragan',
            'casetobehandleds_id' => '0005',
             'created_at' => '5-3-16',
             'updated_at' => '5-7-16',
        }

        public function run()
    {
         DB::table('lawsuit')->insert([
            'name' => '',
            'casetobehandleds_id' => '0001',
             'created_at' => '12-12-12',
             'updated_at' => '12-12-12',
        }

        public function run()
    {
         DB::table('statuses')->insert([
            'name' => 'Popo Enriquez',
             'created_at' => '7-7-17',
             'updated_at' => '7-12-17',

    }
        
}
