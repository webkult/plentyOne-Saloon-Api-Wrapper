<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get system language
 *
 * Gets the system language.
 */
class GetSystemLanguage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/systemlang";
	}


	public function __construct()
	{
	}
}
