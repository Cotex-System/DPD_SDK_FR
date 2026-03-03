<?php

declare(strict_types=1);

/**
 * Charge un fichier .env simple (KEY=VALUE) sans dépendance externe.
 */
function loadEnvFile(string $path): void
{
	if (!is_file($path) || !is_readable($path)) {
		return;
	}

	$lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if ($lines === false) {
		return;
	}

	foreach ($lines as $line) {
		$trimmed = trim($line);
		if ($trimmed === '' || str_starts_with($trimmed, '#')) {
			continue;
		}

		$separatorPos = strpos($trimmed, '=');
		if ($separatorPos === false) {
			continue;
		}

		$key = trim(substr($trimmed, 0, $separatorPos));
		$value = trim(substr($trimmed, $separatorPos + 1));

		if ($key === '') {
			continue;
		}

		if (
			(str_starts_with($value, '"') && str_ends_with($value, '"'))
			|| (str_starts_with($value, "'") && str_ends_with($value, "'"))
		) {
			$value = substr($value, 1, -1);
		}

		putenv($key . '=' . $value);
		$_ENV[$key] = $value;
	}
}

loadEnvFile(dirname(__DIR__) . '/.env');

require dirname(__DIR__) . '/vendor/autoload.php';
