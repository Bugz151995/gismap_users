<?php

namespace App\Controllers;

class Feedback extends BaseController
{
	protected $helpers = ['form'];

	public function create()
	{
		$feedback_tbl = model(FeedbackModel::class);

		if (!$this->validate([
			'feedback' => 'required'
		]))
			return view('home', ['validation' => $this->validator]);

		$feedback_tbl->save([
			'feedback' => $this->request->getPost('feedback'),
			'user_id' => session()->get('user_id')
		]);

		return redirect()->back();
	}
}