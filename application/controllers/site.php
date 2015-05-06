<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site
 *
 * @author richard.lovell
 */
class Site extends CI_Controller {

    function index() {
        //*****hard-coded data
        $data['content'] = 'My content';

        //*****modular views	
        $this->load->library('template');
        $this->template->set_title('Home');
        $this->template->set_title_desc('Codeigniter skeleton project with modular views');
        $this->template->add_meta('description', 'A simple skeleton project built on top of Codeigniter that has modular views.');
        $this->template->add_meta('keywords', 'codeigniter, modular, views');
        $this->template->add_js('assets/themes/default/js/main.js');
        $this->template->add_js('assets/themes/default/js/main.js');
        $this->template->add_css('assets/themes/default/css/main.css');

        $this->template->load_view('pages/home', $data);
    }

}
