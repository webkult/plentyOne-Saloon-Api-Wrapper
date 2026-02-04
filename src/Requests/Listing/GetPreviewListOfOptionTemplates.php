<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a preview list of option templates
 *
 * Gets a preview list of all available listing option templates.
 */
class GetPreviewListOfOptionTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/option_templates/preview";
	}


	public function __construct()
	{
	}
}
