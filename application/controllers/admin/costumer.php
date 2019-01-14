<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class costumer extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model("costumer_model");

  }
  public function index()
  {
    //$data["products"] = $this->costumer_product->getAll();

      $data["costumer"] = $this->costumer_model->getAll();
      var_dump($data["costumer"]);
  }
	}
