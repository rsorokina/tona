<?php

use Illuminate\Database\Seeder;
use App\Models\RegionCenter;

class RegionCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegionCenter::truncate();
        //Insert data RegionCenter Table

        if (file_exists(__DIR__.'/static/rcenters.csv')) {
            $handle = fopen(__DIR__.'/static/rcenters.csv', 'r');
            if ($handle) {
                $row = 1;

                while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) {
        			if ($row > 1) {
        			     RegionCenter::create([
                            'name' => $line[0],
                            'to' => $line[1], 
                            
                        ]);
                        echo $line[0]."---".$line[1]."         \r";
                        //exit();
        			}          
                    
    			$row++;
    			flush(); 
    		  }
    		  fclose($handle);
            }

        } else {
            exit('Error open rcenters.csv.');
        }
    }
}