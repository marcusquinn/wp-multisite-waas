<?php

declare(strict_types=1);

namespace Rector\Tests\TypeDeclaration\Rector\YodaConditionsRector;

use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class YodaConditionsRectorTest extends AbstractRectorTestCase {

	/**
	 * @dataProvider provideData()
	 */
	public function test(string $filePath): void {
		$this->doTestFile($filePath);
	}

	public static function provideData(): \Iterator {
		return self::yieldFilesFromDirectory(__DIR__ . '/Fixture');
	}

	public function provideConfigFilePath(): string {
		return __DIR__ . '/config/configured_rule.php';
	}
}
