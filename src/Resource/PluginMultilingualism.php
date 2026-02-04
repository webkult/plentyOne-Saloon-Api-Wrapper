<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\PluginMultilingualism\CreateNewTranslation;
use PlentyOne\Api\Requests\PluginMultilingualism\DeleteMultipleTranslation;
use PlentyOne\Api\Requests\PluginMultilingualism\DeleteTranslation;
use PlentyOne\Api\Requests\PluginMultilingualism\GetTranslation;
use PlentyOne\Api\Requests\PluginMultilingualism\UpdateTranslation;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PluginMultilingualism extends BaseResource
{
	/**
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $pluginName The name of the plugin
	 * @param string $languageCode The language code for the translation
	 * @param string $key The translation key
	 * @param string $value The value of the translation
	 * @param string $fileName The of the file
	 */
	public function createNewTranslation(
		int $pluginSetId,
		string $pluginName,
		string $languageCode,
		string $key,
		string $value,
		string $fileName,
	): Response
	{
		return $this->connector->send(new CreateNewTranslation($pluginSetId, $pluginName, $languageCode, $key, $value, $fileName));
	}


	/**
	 * @param int $translationId
	 * @param int $id The ID of the translation
	 */
	public function getTranslation(int $translationId, int $id): Response
	{
		return $this->connector->send(new GetTranslation($translationId, $id));
	}


	/**
	 * @param int $translationId
	 * @param int $id The ID of the translation
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $pluginName The name of the plugin
	 * @param string $languageCode The language code for the translation
	 * @param string $key The translation key
	 * @param string $value The value of the translation
	 * @param string $fileName The value of the translation
	 */
	public function updateTranslation(
		int $translationId,
		int $id,
		int $pluginSetId,
		string $pluginName,
		string $languageCode,
		string $key,
		string $value,
		string $fileName,
	): Response
	{
		return $this->connector->send(new UpdateTranslation($translationId, $id, $pluginSetId, $pluginName, $languageCode, $key, $value, $fileName));
	}


	/**
	 * @param int $translationId
	 * @param int $translationId The ID of the translation
	 */
	public function deleteTranslation(int $translationId): Response
	{
		return $this->connector->send(new DeleteTranslation($translationId, $translationId));
	}


	/**
	 * @param int $pluginSetId
	 * @param int $languageCode
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $languageCode The code of the language
	 */
	public function deleteMultipleTranslation(int $pluginSetId, string $languageCode): Response
	{
		return $this->connector->send(new DeleteMultipleTranslation($pluginSetId, $languageCode, $pluginSetId, $languageCode));
	}
}
