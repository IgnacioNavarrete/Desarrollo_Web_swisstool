<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniterOnfire
 * @author		Diego Portales University
 * @copyright	Copyright (c) 2014 - 2014, Diego Portales University (http://udp.cl/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniteronfire.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
  public function __construct()
       {
            parent::__construct();
            // Add your models here
            
            $this->load->model('Blogmodel');

       }
	
	public function index()
	{
		$datos =  $this->Blogmodel->get_last_ten_entries();
		$this->load->view("home",array('datoshome' => $datos));	
	}
	
	 public function get_topic($id)
    {
        $datos=$this->Blogmodel->get_by_id($id);
	    $this->load->view('tema',array('datatema' =>$datos));
    }
	
	 public function ing_tem()
    {
        $this->load->view('ingresar_tema');
    }
    
    public function ingresar(){
		$datos = $this->Blogmodel->insert_entry(); 
		header("Location: /~16606958/swisstool/index.php/Blog");
	}
	
	 public function mod_tem($id)
    {
        //$datos=$this->Blogmodel->get_by_id($id);
        //$this->load->view('modificar_tema',array('datatema' =>$datos));
        $datos= $this->Blogmodel->get_by_id($id);
		$this->load->view('modificar_tema',array( 'id' => $datos->id, 'title' => $datos->title, 'content' => $datos->content, ));
    }
    
    public function update(){
		$datos = $this->Blogmodel->update_entry();
		header("Location: /~16606958/swisstool/index.php/Blog"); 
		
	}
	
}

/* End of file blog.php */
/* Location: ./application/controllers/Blog.php */