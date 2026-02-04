<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate document of an order
 *
 * Generate document of an order. The ID of the order and the type of the document must be specified.
 */
class GenerateDocumentOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->type}/generate";
	}


	/**
	 * @param int $orderId
	 * @param int $type
	 */
	public function __construct(
		protected int $orderId,
		protected int $type,
	) {
	}
}
