<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate dunning letter of an order
 *
 * Generate dunning letter of an order. The ID of the order must be specified.
 * The document can only be
 * generated for orders of the type 'order', 'warranty', 'repair' and 'multi order'.
 */
class GenerateDunningLetterOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/dunning_letter/generate";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param null|string $comment Comment that appears below the stock units.
	 * @param null|int $articleId Add an item to the order.
	 * @param null|int $variationId Add a variation to the order.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $documentDate = null,
		protected ?string $comment = null,
		protected ?int $articleId = null,
		protected ?int $variationId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'documentDate' => $this->documentDate,
			'comment' => $this->comment,
			'articleId' => $this->articleId,
			'variationId' => $this->variationId,
		]);
	}
}
