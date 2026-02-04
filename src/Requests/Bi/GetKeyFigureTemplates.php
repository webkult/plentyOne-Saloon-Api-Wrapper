<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get key figure templates
 *
 * Return list of templates available from configurations
 */
class GetKeyFigureTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config/templates";
	}


	public function __construct()
	{
	}
}
