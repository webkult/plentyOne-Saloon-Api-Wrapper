<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create entry
 *
 * Creates a newsletter entry. The newsletter subject must be specified.
 */
class CreateEntry extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters";
	}


	/**
	 * @param string $subject The subject of the newsletter entry
	 * @param null|string $body The body of the newsletter entry
	 * @param null|string $kind The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].
	 */
	public function __construct(
		protected string $subject,
		protected ?string $body = null,
		protected ?string $kind = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['subject' => $this->subject, 'body' => $this->body, 'kind' => $this->kind]);
	}
}
