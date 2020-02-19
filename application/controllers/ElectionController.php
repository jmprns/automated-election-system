<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ElectionController extends CI_Controller {

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
	public function index()
	{
		$elections = ElectionModel::get();
		return $this->slice->view('election.index', [
			'elections' => $elections
		]);
	}

	public function dashboard($id)
	{
		$election = ElectionModel::where('id', $id)->get()->first();

		return $this->slice->view('election.dashboard', [
			'election' => $election
		]);
	}

	public function create()
	{
		return $this->slice->view('election.create');
	}

	public function store()
	{
		$election = ElectionModel::create([
			"name" => $this->input->post('name'),
			"start" => $this->input->post('start'),
			"end" => $this->input->post('end'),
		]);

		return redirect(base_url()."election/".$election->id."/dashboard");
	}

	public function edit($id)
	{
		$election = ElectionModel::where('id', $id)->get()->first();

		return $this->slice->view('election.edit', [
			'election' => $election
		]);
	}

	public function update($id)
	{
		$election = ElectionModel::where('id', $id)->get()->first();
		$election->name = $this->input->post('name');
		$election->start = $this->input->post('start');
		$election->end = $this->input->post('end');
		$election->save();

		// $this->

		return redirect(base_url()."election/".$election->id."/dashboard");
	}
}
