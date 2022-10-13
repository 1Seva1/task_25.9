<?php

class Model_Portfolio extends Model
{
    public function get_data()
    {
        //эмуляция данных
        return array(
            array(
                'Year' => '2012',
                'Site' => 'http://test.ru',
                'Description' => 'bla-bla-bla'        
            ),
            array(
                'Year' => '2012',
                'Site' => 'http://test1.ru',
                'Description' => 'bla-bla-bla'        
            ),
            array(
                'Year' => '2012',
                'Site' => 'http://test2.ru',
                'Description' => 'bla-bla-bla'        
            )
            );
    }
}