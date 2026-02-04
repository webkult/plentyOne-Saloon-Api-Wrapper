<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get non cached sets
 *
 * Gets all non cached sets.
 */
class GetNonCachedSets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/pluginSets";
	}


	public function __construct()
	{
	}
}
