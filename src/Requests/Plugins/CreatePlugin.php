<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a plugin
 *
 * Creates a plugin with empty plugin folders and a plugin.json file.
 */
class CreatePlugin extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins";
	}


	public function __construct()
	{
	}
}
