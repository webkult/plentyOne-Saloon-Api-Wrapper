<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate dunning letter reversal document of an order
 *
 * Generate dunning letter reversal document of an order. The ID of the order must be specified.
 * The
 * document can only be generated for orders of the type 'order', 'repair' and 'warranty'. A valid
 * dunning letter document must exist.
 */
class GenerateDunningLetterReversalDocumentOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/reversal_dunning_letter/generate";
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
