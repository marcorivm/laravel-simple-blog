<?php

class Contact_Controller extends Base_Controller {

	public function action_index()
	{
		// code here..

		return View::make('contact.index');
	}

	public function action_thank()
	{
		return View::make('contact.thank');
	}	

	public function action_create()
	{
		$input = Input::all();
		$rules = array(
			'name' => 'required|max:10',
			'email' => 'required|email',
			'phone' => 'numeric',
			'message' => 'required',
			);

		$validation = Validator::make($input, $rules);
		if($validation->fails()){
			return Redirect::to_action('contact@index')->with_input()->with_errors($validation);
		} else{
			//enviar mail
			return Redirect::to_action('contact@thank');
		}

		return View::make('contact.create');
	}

}
