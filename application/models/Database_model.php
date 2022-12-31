<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Database_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Database_model extends CI_Model
{
  public function get_data($table)
  {
    return $this->db->get($table);
  }

  public function get_data_where($table, $where, $in_where)
  {
    return $this->db->get_where($table, [$where => $in_where]);
  }

  public function insert_data($table, $data)
  {
    return $this->db->insert($table, $data);
  }
}

/* End of file Database_model.php */
/* Location: ./application/models/Database_model.php */