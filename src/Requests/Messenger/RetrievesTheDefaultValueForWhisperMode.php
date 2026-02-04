<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieves the default value for whisper mode
 *
 * Retrieves the default value for whisper mode
 */
class RetrievesTheDefaultValueForWhisperMode extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messenger/settings/getDefaultWhisperMode";
	}


	public function __construct()
	{
	}
}
