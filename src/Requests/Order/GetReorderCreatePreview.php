<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get a reorder create preview.
 *
 * Returns a reorder preview for the given order data without creating a reorder.
 */
class GetReorderCreatePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/reorders/preview";
	}


	public function __construct()
	{
	}
}
