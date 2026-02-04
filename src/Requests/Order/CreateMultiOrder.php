<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a multi-order
 *
 * Creates a multi-order for a contact. The ID of the contact must be specified. Options chosen in the
 * System » Orders » Order types » Multi-order menu are relevant for this call.
 */
class CreateMultiOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/contacts/{$this->contactId}/multi_order";
	}


	/**
	 * @param int $contactId
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
