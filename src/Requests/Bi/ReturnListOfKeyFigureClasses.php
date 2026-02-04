<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return list of key figure classes
 *
 * Return a list of key figure classes with items <caption, value>
 */
class ReturnListOfKeyFigureClasses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures";
	}


	public function __construct()
	{
	}
}
