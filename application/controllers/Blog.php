<?php
class Blog extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('Blogmodel');
  }
  public function index() {
    $data = $this->Blogmodel->read();
    $this->load->view('main', array('data' => $data));
  }
  public function entry($num) {
    $data = $this->Blogmodel->readAt($num);
    $this->load->view('main', array('data' => $data));
  }
  public function add() {
    $this->load->helper('form');
    $data = $this->input->post();
    if ($data !== null) {
      $this->Blogmodel->save($data['title'], $data['body'], 'ore');
    }
    redirect('blog');
  }
}