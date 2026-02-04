<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate multi credit note of an order
 *
 * Generate multi credit note of an order. The ID of the order must be specified.
 * The document can only
 * be generated for orders of the type 'multi credit note'.
 */
class GenerateMultiCreditNoteOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/multi_credit_note/generate";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param null|string $comment Comment that appears below the stock units.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $documentDate = null,
		protected ?string $comment = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['documentDate' => $this->documentDate, 'comment' => $this->comment]);
	}
}
