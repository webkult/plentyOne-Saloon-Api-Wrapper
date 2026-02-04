<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update variation additional skus
 *
 * Creates and updates a list of variation additional skus.
 */
class CreateAndUpdateVariationAdditionalSkus extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/additional_skus";
	}


	public function __construct()
	{
	}
}
