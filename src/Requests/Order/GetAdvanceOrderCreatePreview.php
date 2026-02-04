<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get an advance order create preview.
 *
 * Returns an advance order preview for the given order data without creating an advance order.
 */
class GetAdvanceOrderCreatePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/advance_orders/preview";
	}


	public function __construct()
	{
	}
}
