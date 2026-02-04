<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return available schedule days list
 *
 * Returns available schedules days list with key and translated value
 */
class ReturnAvailableScheduleDaysList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/schedule/days";
	}


	public function __construct()
	{
	}
}
