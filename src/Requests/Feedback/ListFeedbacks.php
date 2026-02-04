<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List feedbacks
 *
 * Lists feedbacks. The reference type and the reference value must be specified (e.g. the reference
 * type is 'order' and the reference value is the ID of the order).
 */
class ListFeedbacks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/feedbacks";
	}


	public function __construct()
	{
	}
}
