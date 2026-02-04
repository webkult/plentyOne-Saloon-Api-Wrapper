<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List wizards
 *
 * Lists all wizards.
 */
class ListWizards extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards";
	}


	public function __construct()
	{
	}
}
