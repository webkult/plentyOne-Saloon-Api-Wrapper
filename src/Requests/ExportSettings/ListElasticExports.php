<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List elastic exports
 *
 * Lists elastic exports.
 */
class ListElasticExports extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/exports";
	}


	/**
	 * @param null|int $id The ID of the export
	 * @param null|string $formatKey The format of the export
	 * @param null|string $type The type of the export
	 * @param null|string $name The name of the export
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?string $formatKey = null,
		protected ?string $type = null,
		protected ?string $name = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'formatKey' => $this->formatKey,
			'type' => $this->type,
			'name' => $this->name,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
