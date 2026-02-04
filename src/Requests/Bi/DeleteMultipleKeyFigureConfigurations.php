<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete multiple key figure configurations
 *
 * Delete multiple key figure configurations given on array of configurations ids
 */
class DeleteMultipleKeyFigureConfigurations extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/configs";
	}


	public function __construct()
	{
	}
}
