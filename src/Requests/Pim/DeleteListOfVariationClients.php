<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation clients
 *
 * Deletes a list of variation clients.
 */
class DeleteListOfVariationClients extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/clients";
	}


	public function __construct()
	{
	}
}
