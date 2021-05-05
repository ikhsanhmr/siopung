<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Milstone_model extends CI_Model
{
  var $table = 'milstone';
  var $column_order = array(null,'nama_milstone', 
  'start_plan_unit1','start_actual_unit1', 'finish_plan_unit1','finish_actual_unit1',
  'start_plan_unit2','start_actual_unit2', 'finish_plan_unit2','finish_actual_unit2',
  'start_plan_unit3','start_actual_unit3', 'finish_plan_unit3','finish_actual_unit3',
  'start_plan_unit4','start_actual_unit4', 'finish_plan_unit4','finish_actual_unit4',
  'start_plan_unit5','start_actual_unit5', 'finish_plan_unit5','finish_actual_unit5',
  'start_plan_unit6','start_actual_unit6', 'finish_plan_unit6','finish_actual_unit6',
  'start_plan_unit7','start_actual_unit7', 'finish_plan_unit7','finish_actual_unit7',
  'start_plan_unit8','start_actual_unit8', 'finish_plan_unit8','finish_actual_unit8',
  'start_plan_unit9','start_actual_unit9', 'finish_plan_unit9','finish_actual_unit9',
  'start_plan_unit10','start_actual_unit10', 'finish_plan_unit10','finish_actual_unit10',
  'start_plan_unit11','start_actual_unit11', 'finish_plan_unit11','finish_actual_unit11',
  'start_plan_unit12','start_actual_unit12', 'finish_plan_unit12','finish_actual_unit12',
  'start_plan_unit13','start_actual_unit13', 'finish_plan_unit13','finish_actual_unit13',
  'start_plan_unit14','start_actual_unit14', 'finish_plan_unit14','finish_actual_unit14',
  'start_plan_unit15','start_actual_unit15', 'finish_plan_unit15','finish_actual_unit15'); //set column field database for datatable orderable
  var $column_search = array('nama_milstone', 
  'start_plan_unit1','start_actual_unit1', 'finish_plan_unit1','finish_actual_unit1',
  'start_plan_unit2','start_actual_unit2', 'finish_plan_unit2','finish_actual_unit2',
  'start_plan_unit3','start_actual_unit3', 'finish_plan_unit3','finish_actual_unit3',
  'start_plan_unit4','start_actual_unit4', 'finish_plan_unit4','finish_actual_unit4',
  'start_plan_unit5','start_actual_unit5', 'finish_plan_unit5','finish_actual_unit5',
  'start_plan_unit6','start_actual_unit6', 'finish_plan_unit6','finish_actual_unit6',
  'start_plan_unit7','start_actual_unit7', 'finish_plan_unit7','finish_actual_unit7',
  'start_plan_unit8','start_actual_unit8', 'finish_plan_unit8','finish_actual_unit8',
  'start_plan_unit9','start_actual_unit9', 'finish_plan_unit9','finish_actual_unit9',
  'start_plan_unit10','start_actual_unit10', 'finish_plan_unit10','finish_actual_unit10',
  'start_plan_unit11','start_actual_unit11', 'finish_plan_unit11','finish_actual_unit11',
  'start_plan_unit12','start_actual_unit12', 'finish_plan_unit12','finish_actual_unit12',
  'start_plan_unit13','start_actual_unit13', 'finish_plan_unit13','finish_actual_unit13',
  'start_plan_unit14','start_actual_unit14', 'finish_plan_unit14','finish_actual_unit14',
  'start_plan_unit15','start_actual_unit15', 'finish_plan_unit15','finish_actual_unit15'); //set column field database for datatable searchable 
  var $order = array('id_milstone' => 'desc'); // default order 

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function _get_datatables_query($id_project)
  {
    $this->db->select('id_project,id_milstone,nama_milstone, 
    start_plan_unit1,start_actual_unit1, finish_plan_unit1,finish_actual_unit1,
    start_plan_unit2,start_actual_unit2, finish_plan_unit2,finish_actual_unit2,
    start_plan_unit3,start_actual_unit3, finish_plan_unit3,finish_actual_unit3,
    start_plan_unit4,start_actual_unit4, finish_plan_unit4,finish_actual_unit4,
    start_plan_unit5,start_actual_unit5, finish_plan_unit5,finish_actual_unit5,
    start_plan_unit6,start_actual_unit6, finish_plan_unit6,finish_actual_unit6,
    start_plan_unit7,start_actual_unit7, finish_plan_unit7,finish_actual_unit7,
    start_plan_unit8,start_actual_unit8, finish_plan_unit8,finish_actual_unit8,
    start_plan_unit9,start_actual_unit9, finish_plan_unit9,finish_actual_unit9,
    start_plan_unit10,start_actual_unit10, finish_plan_unit10,finish_actual_unit10,
    start_plan_unit11,start_actual_unit11, finish_plan_unit11,finish_actual_unit11,
    start_plan_unit12,start_actual_unit12, finish_plan_unit12,finish_actual_unit12,
    start_plan_unit13,start_actual_unit13, finish_plan_unit13,finish_actual_unit13,
    start_plan_unit14,start_actual_unit14, finish_plan_unit14,finish_actual_unit14,
    start_plan_unit15,start_actual_unit15, finish_plan_unit15,finish_actual_unit15');
    $this->db->from($this->table);
    $this->db->where('id_project', $id_project);

    $i = 0;
    if (isset($_POST['search']['value'])) {
      foreach ($this->column_search as $item) // loop column 
      {
        if ($_POST['search']['value']) // if datatable send POST for search
        {
          if ($i === 0) // first loop
          {
            // $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
            $this->db->like($item, $_POST['search']['value']);
          } else {
            $this->db->or_like($item, $_POST['search']['value']);
          }

          if (count($this->column_search) - 1 == $i); //last loop
          // $this->db->group_end(); //close bracket
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
    return $query->result();
  }


  function count_filtered($id_project)
  {
    $this->_get_datatables_query($id_project);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all($id_project)
  {
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }
}
