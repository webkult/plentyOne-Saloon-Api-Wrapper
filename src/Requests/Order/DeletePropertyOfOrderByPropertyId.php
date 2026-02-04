<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete property of an order by property ID
 *
 * <b>DEPRECATED: Use the following route: PUT /rest/orders/{orderId}</b>
 * Deletes a property of an
 * order. The ID of the property must be specified.
 */
class DeletePropertyOfOrderByPropertyId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/properties/{$this->id}";
	}


	/**
	 * @param int $id The ID of the property to be deleted.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
