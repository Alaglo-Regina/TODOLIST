<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BackupGlobals extends Metadata
{
    private bool $enabled;

    /**
     * @psalm-param 0|1 $level
     */
    protected function __construct(int $level, bool $enabled)
    {
        parent::__construct($level);

        $this->enabled = $enabled;
    }

    /**
     * @psalm-assert-if-true BackupGlobals $this
     */
    public function isBackupGlobals(): bool
    {
        return true;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }
}
