<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Compile a single sass file.
 *
 * Compile a single sass file. Optionally prepend variables.
 */
class CompileSingleSassFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/sass/compile";
	}


	/**
	 * @param null|string $path The path to the sass file to be compiled.
	 * @param null|string $variables An optional sass formatted string to be prepended to the file content.
	 */
	public function __construct(
		protected ?string $path = null,
		protected ?string $variables = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['path' => $this->path, 'variables' => $this->variables]);
	}
}
