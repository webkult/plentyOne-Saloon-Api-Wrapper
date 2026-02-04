<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete texts
 *
 * Deletes texts for an item in the specified language. The ID of the variation and the language code
 * must be specified.
 */
class DeleteTexts extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/descriptions/{$this->lang}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $lang
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $lang,
	) {
	}
}
