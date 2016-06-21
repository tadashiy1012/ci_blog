<?php
class Blogmodel extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
    //date_default_timezone_set("Asia/Tokyo");
  }
  public function read() {
    $query = $this->db->get('blogs');
    return $query->result();
  }
  public function readAt($id) {
    $query = $this->db->get_where('blogs', array(
      'id' => $id
    ));
    return $query->result();
  }
  public function save($title, $body, $author) {
    $data = array(
      'id' => null,
      'title' => $title,
      'body' => $body,
      'date' => date('Y-m-d'),
      'author' => $author
    );
    $this->db->insert('blogs', $data);
  }
}