<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a category
 *
 * Gets a category specified by categoryId.
 */
class GetCategory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->id}";
	}


	/**
	 * @param int $id The ID of the category
	 * @param null|int $page The requested page of results
	 * @param null|int $itemsPerPage The number of results per page
	 * @param null|string $with Includes the detail information, the active clients (stores) list of the category and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories
	 * @param null|string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>languages</a> of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used.
	 * @param null|string $type The category type. Available values: item, container, content, blog
	 * @param null|int $parentId The unique ID of the parent category
	 * @param null|int $plentyId The unique plenty ID of the client (store)
	 * @param null|string $name The name of the category
	 * @param null|string $level The level of the category
	 * @param null|bool $linklist Filter for the linklist of categories
	 * @param null|string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function __construct(
		protected int $id,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $with = null,
		protected ?string $lang = null,
		protected ?string $type = null,
		protected ?int $parentId = null,
		protected ?int $plentyId = null,
		protected ?string $name = null,
		protected ?string $level = null,
		protected ?bool $linklist = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
			'lang' => $this->lang,
			'type' => $this->type,
			'parentId' => $this->parentId,
			'plentyId' => $this->plentyId,
			'name' => $this->name,
			'level' => $this->level,
			'linklist' => $this->linklist,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
