<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Controller {
    
    public function index() {
       
       $a = 20;
       $b = 10;

        $sum = $this->sum_values($a, $b);

        echo $sum;

    }


    public function sum_values($a, $b){

        $sum = $a + $b;

        return $sum;

    }


    public function show_cats(){

        $cats = [
                    [   
                        "name" => "Mobilya",
                        "sub_cats" => [
                            ["name" => "Bahçe Mobilyası"],
                            ["name" => "Ev Mobilyası",
                                "sub_cats" => [
                                    ["name" => "Koltuk Takımları"],
                                    ["name" => "Yemek Odası"],
                                    ["name" => "Çocuk Odası"]
                                ]
                            ]
                        ]
                    ],
                    [
                        "name" => "Elektronik"
                    ]
                ];
        
                //debug($cats);


            $this->get_sub_cats($cats);


    }


    public function get_sub_cats($cats, $indent = 0){
        
        
        foreach($cats as $key => $cat){
            echo str_repeat('-', $indent*4);
            echo $cat['name'].'<br>';
            if(isset($cat['sub_cats'])){
                $this->get_sub_cats($cat['sub_cats'], $indent+1);
            }
        }

    }

    /**
     * Elektronik
     * -- Bilgisayar
     *  -- Dizüstü
     *    -- Dokunmatik Ekran
     *    -- Normal Ekran
     * 
     */


}
?>