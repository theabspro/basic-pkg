<?php

namespace Abs\Basic;
use App\Http\Controllers\Controller;

class EntityController extends Controller {

	private $company_id;

	public function __construct() {
	}

	public function entityList($entity_type_id) {
		dd('Entity List');
	}
}
