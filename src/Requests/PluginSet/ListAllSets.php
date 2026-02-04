<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all Sets
 *
 * Lists all available sets.
 */
class ListAllSets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets";
	}


	public function __construct()
	{
	}
}
