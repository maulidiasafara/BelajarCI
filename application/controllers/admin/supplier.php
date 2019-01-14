<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model("supplier_model");

  }
  public function index()
  {
    //$data["products"] = $this->costumer_product->getAll();

      $data["supplier"] = $this->supplier_model->getAll();
      $this->load->view("admin/supplier/list", $data);
      //var_dump($data["supplier"]);
}
	}
