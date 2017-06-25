<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class RegistrierenController extends Controller
{
	protected $viewFileName = "registrieren"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = "Registrieren";

		$this->view->sepp = "Test";

		$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);
	}

}