<?php 

namespace App\Controllers;

class aUser extends BaseController
{
	private $baseTable = "";
	private $prefix = "";
	private $pagename = "";

	public function __construct()
    {
		// page data
    	$this->baseTable = "tbl_admin";
    	$this->prefix = "user";
    	$this->pagename = "User";
    }

	public function index()
	{
		$db = \Config\Database::connect();

		$sql = "SELECT * FROM tbl_user";
		$rows = $db->query($sql);

		$data['rows'] = $rows->getResult();
		return view('admin/user/user_list', $data);
	}

	public function tambah()
	{
		return view('admin/user/user_ae');
	}
}
