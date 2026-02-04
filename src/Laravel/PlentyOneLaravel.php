<?php

declare(strict_types=1);

namespace PlentyOne\Api\Laravel;

use PlentyOne\Api\PlentyOne;
use Saloon\Helpers\OAuth2\OAuthConfig;
use SensitiveParameter;

class PlentyOneLaravel extends PlentyOne
{
    public function __construct(
        #[SensitiveParameter]
        string $clientId,
        #[SensitiveParameter]
        string $clientSecret,
        ?string $authorizationUrl = null,
        ?string $tokenUrl = null,
        ?string $refreshUrl = null,
        ?array $scopes = [],
        protected string $baseUrl = 'https://example.com',
    ) {
        parent::__construct(
            $clientId,
            $clientSecret,
            $authorizationUrl ?? $this->baseUrl . '/oauth/authorize',
            $tokenUrl ?? $this->baseUrl . '/oauth/token',
            $refreshUrl,
            $scopes ?? [],
        );
    }

    public function resolveBaseUrl(): string
    {
        return rtrim($this->baseUrl, '/') . '/';
    }
}
