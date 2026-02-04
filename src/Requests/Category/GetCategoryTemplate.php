<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a category template
 *
 * Gets a category template. The ID of the category, the plenty ID of the client (store) and the
 * language must be specified.
 */
class GetCategoryTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->id}/templates";
	}


	/**
	 * @param int $id
	 * @param null|string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the template. If no language filter is set, the default language of the system is used.
	 * @param int $plentyId The unique plenty ID of the client (store)
	 */
	public function __construct(
		protected int $id,
		protected ?string $lang = null,
		protected int $plentyId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['lang' => $this->lang, 'plentyId' => $this->plentyId]);
	}
}
