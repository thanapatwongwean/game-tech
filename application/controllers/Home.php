<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    function _remap($param)
    {
        $this->index($param);
    }

    public function index($param)
    {
        //load view
        $data = array();
		if($param == 'AMD_V' || $param == 'NVIDIA')
		{
		if($param == 'AMD_V')
			$param = 'AMD';
			$this->load->model('product_model');
            $datas = $this->product_model->getContainVGA($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );		
		}
		elseif($param == '15000' || $param == '20000'  || $param == '25000' || $param == '1000000')
		{
			$this->load->model('product_model');
            $datas = $this->product_model->getDataPrice($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );		
		}
		elseif($param == 'CORSAIR_M' || $param == 'SIGNO_M' || $param == 'STEELSERIES_M')
		{
			$this->load->model('product_model');
            $datas = $this->product_model->getContainGGM($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );		
		}
		elseif($param == 'CORSAIR_K' || $param == 'SIGNO_K' || $param == 'STEELSERIES_K')
		{
			$this->load->model('product_model');
            $datas = $this->product_model->getContainGGK($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );		
		}
		elseif($param == 'STEELSERIES' || $param == 'SENNHEISER' || $param == 'HYPERX')
		{
		$this->load->model('product_model');
            $datas = $this->product_model->getContainHS($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );
        }
		elseif(($param != 'CPU' && $param != 'MB' && $param != 'VGA' && $param != 'HDD' && $param != 'SSD' && $param != 'COOL' && $param != 'PSU' && $param != 'CASE' && $param != 'RAM' && $param != 'NB' && $param != 'MOUSE' && $param != 'KB' && $param != 'HEADSET' )&&!empty($param))
		{
		$this->load->model('product_model');
            $datas = $this->product_model->getContain($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );
        }


        elseif (!empty($param)) {
            $this->load->model('product_model');
            $datas = $this->product_model->getData($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );
        }
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');

    }

}