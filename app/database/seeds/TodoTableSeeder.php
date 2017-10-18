<?php

class TodoTableSeeder extends Seeder {
    
        public function run()
        {
    
            Eloquent::unguard();
    
            DB::table('todos')->delete();
    
            Todo::create(array(
                'title' => 'A משימה',
                'completed' => false
            ));

            Todo::create(array(
	            'title' => 'B משימה',
	            'completed' => true
            ));

            Todo::create(array(
                'title' => 'C משימה',
                'completed' => false
            ));
            
            Todo::create(array(
                'title' => 'D משימה',
                'completed' => false
            ));

            Todo::create(array(
	            'title' => 'E משימה',
	            'completed' => true
            ));

            Todo::create(array(
                'title' => 'F משימה',
                'completed' => false
            ));

            Todo::create(array(
                'title' => 'G משימה',
                'completed' => false
            ));

            Todo::create(array(
	            'title' => 'H משימה',
	            'completed' => true
            ));

            Todo::create(array(
                'title' => 'I משימה',
                'completed' => false
            ));
        }
    
    }