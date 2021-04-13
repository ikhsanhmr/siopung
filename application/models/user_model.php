<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  var $table = 'user';
  var $column_order = array(null, 'activity', 'waktu'); //set column field database for datatable orderable
  var $column_search = array('activity', 'waktu'); //set column field database for datatable searchable 
  var $order = array('id_log_activity' => 'desc'); // default order
}
