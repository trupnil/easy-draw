<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{

	}

	

	public function insert($table,$data)
	{
		
		 return $this->db->insert($table,$data);

	}

	public function select_all($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$res = $this->db->get();
		return $res->result();

	}

	public function delete($table,$where)
	{
		return $this->db->delete($table,$where);
	}

	public function Select_where(string $table, array $where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$res = $this->db->get();
		return $res->result();


	}
	
	
	public function login(string $table, array $where,array $v)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where($v);
		$res = $this->db->get();
		return $res->result();


	}


	public function Get_message(string $table, array $where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by("msg_id", "DESC");
		$res = $this->db->get();
		return $res->result();


	}

	public function allmessage(string $table,array $receiver_id, array $sender_id)
	{
				$this->db->select('*');
		$this->db->from($table);
		$this->db->where($receiver_id);
		$this->db->where($sender_id);
		$this->db->order_by("msg_id", "DESC");
		$res = $this->db->get();
		return $res->result();		
	}

	public function update(string $table, array $data, array $where)
	{
		return $this->db->update($table,$data,$where);
	}

	public function join( string $table,string $table2,string $condition)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table2,$condition);
		$res = $this->db->get();
		return $res->result();
	}

		public function join3( string $table,string $table2,string $table3,string $condition,string $condition2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table2,$condition);
		$this->db->join($table3,$condition2);
		$res = $this->db->get();
		return $res->result();
	}

	public function join_where( string $table,string $table2,string $condition,array $where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($table2,$condition);
		$this->db->where($where);
		$res = $this->db->get();
		return $res->result();
	}
	
	public function search(string $table,array $keyword)
	{
	   $this->db->select('*');
       $this->db->from($table);
       $this->db->where("receiver_id");
      // $this->db->like('receiver_id', $keyword);
       $query = $this->db->get();
       return $query->result();
	 }




}
