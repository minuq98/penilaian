<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function get($table)
	{
		return $this->db->get($table); 		
	}

	public function get_where($table,$where)
	{
		return $this->db->get_where($table,$where); 		
	}

	public function que($level)
	{
		return $this->db->query("SELECT 
			u.id as id,u.kuesioner , k.kriteria ,level,jumlah, bobot
		 FROM  kuesioner u INNER JOIN kriteria k  on k.id = u.id_kriteria where k.level = '".$level."' " );

	}


	public function skor_awal()
	{
		return $this->db->query("SELECT s.id,s.id_dosen,s.skor,s.id_penilai,u2.level as level ,s.matakuliah, u1.nama as dosen, u2.nama as penilai, m.nama
				FROM skor_awal s
			LEFT JOIN user u1
			  ON s.id_dosen = u1.id
			LEFT JOIN user u2
			  ON s.id_penilai = u2.id
			left Join matakuliah m
			  ON s.matakuliah = m.id" );

	}



	public function skor($level)
	{
		return $this->db->query("
			SELECT a.id_dosen, COUNT(a.id_dosen) jumlah ,CONVERT(GROUP_CONCAT((a.skor) SEPARATOR ',  ') USING utf8) AS skor 
			FROM skor_awal as a  INNER join user u  on a.id_penilai = u.id AND u.level = '".$level."'
			WHERE a.id_dosen <> '' and a.skor != ''
				GROUP BY a.id_dosen
		");

	}

	public function kue($value)
	{
		return $this->db->query("SELECT s.id ,s.id_dosen, s.skor,s.id_penilai,u.nama FROM skor_awal s inner JOIN user u ON s.id_dosen = u.id WHERE s.id_penilai = ".$value);
	}

	public function kriteria($value)
	{
		return $this->db->query("SELECT u.id, u.kuesioner FROM kuesioner u inner join kriteria a ON u.id_kriteria = a.id WHERE a.level = '".$value."'");
	}

	public function dosen()
	{
		return $this->db->query("SELECT distinct s.id,s.id_dosen,s.matakuliah, u1.nama as dosen, m.nama
				FROM skor_awal s
			LEFT JOIN user u1
			  ON s.id_dosen = u1.id
			
			left Join matakuliah m
			  ON s.matakuliah = m.id group by matakuliah" );

	}

	public function check($table,$where)
	{
		return $this->db->get_where($table,$where); 		
	}
	
	public function insert($table,$data){
		return $this->db->insert($table, $data);
	}

	public function update($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($table,$data){
		$this->db->where($data);
		$this->db->delete($table);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */	