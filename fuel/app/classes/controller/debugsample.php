<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_DebugSample extends Controller
{
    public function action_index()
    {
        $output = '';
        
        for ($i = 0; $i < 10; $i++)
        {
            $output .= $this->process($i);
        }
        return $output;
    }
    
    public function process($arg)
    {
        $val = 2 * $arg;
        return '2×' . $arg . ' は ' . $val . ' です。<br>';
    }
    
}


