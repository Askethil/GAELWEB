<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MasterController
 *
 * @author Clément
 */

namespace GaelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MasterController extends Controller{
    //put your code here
     protected function render($view, array $parameters = array(), Response $response = null)
    {
        $parameters['categories'] = "";
        return parent::render($view, $parameters, $response);
    }
    
    
}
