<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model("karyawan_model");

  }
  public function index()
  {
    //$data["products"] = $this->costumer_product->getAll();

      $data["karyawan"] = $this->karyawan_model->getAll();
      $this->load->view("admin/karyawan/list", $data);
      //var_dump($data["supplier"]);
}
	}
