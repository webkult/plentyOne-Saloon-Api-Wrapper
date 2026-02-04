<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation additional skus
 *
 * Deletes a list of variation additional skus.
 */
class DeleteListOfVariationAdditionalSkus extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/additional_skus";
	}


	public function __construct()
	{
	}
}
