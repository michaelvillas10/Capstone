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
             
          ])
             
          DB::table('users')->insert([
            'name' => 'Johm Michael Villas',
            'email' => 'michael10@yahoo.com',
            'password' => bcrypt('secret'),
             
          ])
              
           DB::table('users')->insert([
            'name' => 'John Edward Olino',
            'email' => 'Olinojeds@gmail.com',
            'password' => bcrypt('secret'),
             
          ]) 
               
            DB::table('users')->insert([
            'name' => 'Warlito Villamor',
            'email' => 'Warlitowally@yahoo.com',
            'password' => bcrypt('secret'),
             
          ]) 
                
             DB::table('users')->insert([
            'name' => 'Ryan Lumido',
            'email' => 'Ryanapuch@yahoo.com',
            'password' => bcrypt('secret'),
             
          ])
             
             DB::table('users')->insert([
            'name' => 'Patrick Rodriguez',
            'email' => 'Hetysu@gmail.com',
            'password' => bcrypt('secret'),    
           
        }

         public function run()
    {
         DB::table('citizenship')->insert([
            'name' => 'Filipino',
             
             ])
             
             DB::table('citizenship')->insert([
            'name' => 'American',
             
             ])
                 
             DB::table('citizenship')->insert([
            'name' => 'Japanese',
             
             ])
                 
             DB::table('citizenship')->insert([
            'name' => 'Brazilian',
             
             ])
                 
             DB::table('citizenship')->insert([
            'name' => 'African',
             
             ])
             
             DB::table('citizenship')->insert([
            'name' => 'African',
             
             ]) 
             
             DB::table('citizenship')->insert([
            'name' => 'Dutch',
             
             ])    
            
             DB::table('citizenship')->insert([
            'name' => 'Malaysian',
             
             ])
                 
             DB::table('citizenship')->insert([
            'name' => 'British',
                 
             ])    
                 
             DB::table('citizenship')->insert([
            'name' => 'Colombian',
             
             ])    
             
             DB::table('citizenship')->insert([
            'name' => 'Dominican',
             
             ])   
        }
            public function run()
    {
        DB::table('lawsuit')->insert([
            'name' => 'Bribery'
            
      
             ])
             DB::table('lawsuit')->insert([
            'name' => 'Child Abuse'
           
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Child Pornography'
          
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Cyber Bullying'
         
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Forgery'
            
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Fraud'
            
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Harassment'
           
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Homicide'
           
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Kidnapping'
           
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Prostitution'
         
      
             ])
             
             DB::table('lawsuit')->insert([
            'name' => 'Sexual Assault'
            
      
             ])
             
        
        }
             public function run()
    {
            DB::table('casetypes')->insert([
            'name' => 'Civil',
             
             ])
             
             DB::table('casetypes')->insert([
            'name' => 'Criminal',
             
             ])  
             
             DB::table('casetypes')->insert([
            'name' => 'Juvenile',
             
             ])
                 
             DB::table('casetypes')->insert([
            'name' => 'Domestic',
             
             ])
                  
             DB::table('casetypes')->insert([
            'name' => 'Miscellaneous Civil',
             
             ])
        }   

            public function run()
    {
         DB::table('categories')->insert([
            'name' => 'VAWC',
             
           ])
             
         DB::table('categories')->insert([
            'name' => 'Habeas Corpus',
             
           ])
             
         DB::table('categories')->insert([
            'name' => 'Appeals against orders of Statutory Bodies',
             
           ])
             
         DB::table('categories')->insert([
            'name' => 'Admiralty and Maritime Law',
             
           ])  
             
         DB::table('categories')->insert([
            'name' => 'Statutory',
             
           ])    
        }

        public function run()
    {
         DB::table('education')->insert([
            'name' => 'Elementary'
         
      
             ])
             
             DB::table('education')->insert([
            'name' => 'High School'
          
      
             ])
             
             DB::table('education')->insert([
            'name' => 'College'
            
              
             ])
             
             DB::table('education')->insert([
            'name' => 'Masteral'
     
      
             ])
             
             DB::table('education')->insert([
            'name' => 'Doctoral'
         
             
        }

        public function run()
    {
         DB::table('employees')->insert([
            'name' => 'Justin Dominic Planto',
            'efname' => 'Justin',
             'emname' => 'Dominic',
             'elname' => 'Planto',
             'email' => 'MJC@gmail.com',
             'position' => 'Secretary',
             'contact' => '09090104050',
             'clients_id' => '0009',
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
         DB::table('language')->insert([
            'name' => 'Tagalog'
           
            
            ])
            
             DB::table('language')->insert([
            'name' => 'English'
         
            
            ])
            
            DB::table('language')->insert([
            'name' => 'Mandarin'
          
            
            ])
            
            DB::table('language')->insert([
            'name' => 'Russian'
          
            
            ])
            
            DB::table('language')->insert([
            'name' => 'Spanish'
         
            
            ])
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
         DB::table('statuses')->insert([
            'name' => 'Shanti Enriquez',
             'created_at' => '7-7-17',
             'updated_at' => '7-12-17',
             
             
         public function run()
    {
         DB::table('religion')->insert([
            'name' => 'Roman Catholic'
             
            
            ])
            
            DB::table('religion')->insert([
            'name' => 'Seventh-day adventist'
            
            
            ])
            
            DB::table('religion')->insert([
            'name' => 'Buddhism'
             
            
            ])
                
            DB::table('religion')->insert([
            'name' => 'islam'
             
            
            ])
                
            DB::table('religion')->insert([
            'name' => 'Hinduism'
         
            
            ])    
        }


    }
        
}
