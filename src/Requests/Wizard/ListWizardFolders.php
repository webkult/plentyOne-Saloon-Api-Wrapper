<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List wizard folders
 *
 * Lists wizard folders
 */
class ListWizardFolders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/folders";
	}


	public function __construct()
	{
	}
}
