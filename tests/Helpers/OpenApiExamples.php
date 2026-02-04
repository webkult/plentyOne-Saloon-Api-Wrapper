<?php

declare(strict_types=1);

namespace PlentyOne\Api\Tests\Helpers;

final class OpenApiExamples
{
    private const OPENAPI_PATH = __DIR__ . '/../../openapi/plentymarkets-openapi.json';

    /**
     * @return list<array{path: string, method: string, example: array}>
     */
    public static function load(): array
    {
        $content = file_get_contents(self::OPENAPI_PATH);
        if ($content === false) {
            return [];
        }
        $spec = json_decode($content, true);
        if (! is_array($spec)) {
            return [];
        }
        $paths = $spec['paths'] ?? [];
        $result = [];
        $methods = ['get', 'post', 'put', 'patch', 'delete'];
        foreach ($paths as $path => $operations) {
            if (! is_array($operations)) {
                continue;
            }
            foreach ($operations as $method => $op) {
                if (! in_array(strtolower($method), $methods, true) || ! is_array($op)) {
                    continue;
                }
                $response = $op['responses'][200]['content']['application/json']['example'] ?? null;
                if ($response === null || ! is_array($response)) {
                    continue;
                }
                $result[] = [
                    'path' => $path,
                    'method' => strtoupper($method),
                    'example' => $response,
                ];
            }
        }
        return $result;
    }

    /**
     * @return list<array{path: string, method: string, example: array}>
     */
    public static function forAccounting(): array
    {
        return array_values(array_filter(self::load(), static function (array $row): bool {
            return str_starts_with($row['path'], '/rest/accounting/');
        }));
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function getExampleByPathAndMethod(string $path, string $method): ?array
    {
        foreach (self::load() as $row) {
            if ($row['path'] === $path && $row['method'] === strtoupper($method)) {
                $ex = $row['example'];
                return is_array($ex) ? $ex : null;
            }
        }
        return null;
    }
}
