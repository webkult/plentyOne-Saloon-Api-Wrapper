<?php

namespace PlentyOne\Api\Requests\Export;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List export documents
 *
 * List export documents by order ID.
 */
class ListExportDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/export_documents/{$this->orderId}";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
