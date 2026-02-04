<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create a list of variation clients
 *
 * Creates a list of variation clients.
 */
class CreateListOfVariationClients extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/clients";
	}


	public function __construct()
	{
	}
}
