<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daily_activity_model extends CI_Model
{
  var $table = 'daily_activity';
  var $column_order = array(null, 'date_activity', 'milstone', 'pekerjaan', 'kendala', 'tindak_lanjut', 'status',  null); //set column field database for datatable orderable
  var $column_search = array('date_activity', 'milstone', 'pekerjaan', 'kendala', 'tindak_lanjut', 'status'); //set column field database for datatable searchable 
  var $order = array('id_daily_activity' => 'desc'); // default order

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_datatables_query($id_project)
  {
    $this->db->from($this->table);
    $this->db->where($this->table . '.id_project', $id_project);

    $i = 0;
    if (isset($_POST['search']['value'])) {
      foreach ($this->column_search as $item) // loop column 
      {
        if ($_POST['search']['value']) // if datatable send POST for search
        {

          if ($i === 0) // first loop
          {
            // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
            $this->db->where('id_project', $id_project);
            $this->db->like($item, $_POST['search']['value']);
          } else {
            $this->db->where('id_project', $id_project);
            $this->db->or_like($item, $_POST['search']['value']);
          }

          if (count($this->column_search) - 1 == $i); //last loop
          // $this->db->group_end(); /close bracket
        }
        $i++;
      }
    }

    if (isset($_POST['order'])) // here order processing
    {
      $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($this->order)) {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  function get_datatables($id_project)
  {
    $this->_get_datatables_query($id_project);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    $query = $this->db->get();
    return $query->result_array();
  }

  function count_all($id_project)
  {
    $this->db->from($this->table);
    $this->db->where('id_project', $id_project);
    return $this->db->count_all_results();
  }

  function count_filtered($id_project)
  {
    $this->_get_datatables_query($id_project);
    $query = $this->db->get();
    return $query->num_rows();
  }
}
