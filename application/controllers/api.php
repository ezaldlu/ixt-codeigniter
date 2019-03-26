<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Access-Control-Allow-Methods: GET, POST, PUT");

/**
 * 
 */
class Api extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_app');
		// $this->load->library('form_validation');

		// Login Session
	}

	public function getTotalTicket()
	{
		$query = $this->db->query("SELECT COUNT(id_ticket) AS jml_ticket FROM ticket")->result_array();
		print_r(json_encode($query));
	}

	public function getTotalEmployee()
	{
		$query = $this->db->query("SELECT COUNT(nik) AS jml_karyawan FROM karyawan")->result_array();
		print_r(json_encode($query));
	}

	public function getTotalFixedIssue()
	{
		$query = $this->db->query("SELECT COUNT(id_ticket) AS jml_ticket_solved FROM ticket where status = 6")->result_array();
		print_r(json_encode($query));
	}

	public function getTotalFeedback()
	{
		$query = $this->db->query("SELECT COUNT(id_feedback) as Total FROM `history_feedback` WHERE feedback IS NOT NULL")->result_array();
		print_r(json_encode($query));
	}

	public function getTicketOnProcess()
	{
		$query = $this->db->query("SELECT COUNT(id_ticket) AS jml_ticket_process FROM ticket where status = 4")->result_array();
		print_r(json_encode($query));
	}

	public function getCompleteTask()
	{
		$query = $this->db->query("SELECT COUNT(id_ticket) AS jml_ticket_solved FROM ticket where status = 6")->result_array();
		print_r(json_encode($query));
	}



}

?>