<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List files from the inbox
 *
 * Lists all files of all plugins stored in the inbox. A prefix can be specified to list all files of a
 * specific
 * plugin folder only.
 */
class ListFilesFromTheInbox extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/plugins/inbox/list";
	}


	/**
	 * @param null|string $prefix Prefix to list all files of a specific plugin folder only. The prefix also means the plugin path. The <code>prefix</code> key with the value <code>PluginA/src/</code> will only return files in the <b>src</b> folder of <b>PluginA</b>.
	 */
	public function __construct(
		protected ?string $prefix = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['prefix' => $this->prefix]);
	}
}
