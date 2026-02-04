<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get a repair order create preview.
 *
 * Returns a repair order preview for the given order data without creating a repair order.
 */
class GetRepairOrderCreatePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/preview";
	}


	public function __construct()
	{
	}
}
