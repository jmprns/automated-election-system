<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PositionController extends CI_Controller {

	public function index()
	{
		return $this->slice->view('election.index');
	}

	public function dashboard($id)
	{
		$election = ElectionModel::where('id', $id)->get()->first();

		return $this->slice->view('election.dashboard', [
			'election' => $election
		]);
	}

	public function create($id)
	{
        $election = ElectionModel::where('id', $id)->get()->first();
		return $this->slice->view('position.create',[
            'election' => $election
        ]);
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
}
