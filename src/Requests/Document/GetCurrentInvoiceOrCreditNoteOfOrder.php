<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get current invoice or credit note of an order
 *
 * Get current invoice or credit note of an order. The ID of the order must be specified. The last
 * valid document for which no reversal document exists is found.
 */
class GetCurrentInvoiceOrCreditNoteOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->type}/current";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are invoice, creditNote, dunningLetter
	 * @param null|bool $withContent Load also the document content as base64 encoded string.
	 */
	public function __construct(
		protected int $orderId,
		protected string $type,
		protected ?bool $withContent = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['withContent' => $this->withContent]);
	}
}
