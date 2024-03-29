<?php

declare(strict_types=1);

namespace Windwalker\Cache\Storage;

/**
 * The ForeverFileStorage class.
 */
class ForeverFileStorage extends FileStorage
{
    /**
     * @param  int       $expiration
     * @param  int|null  $time
     *
     * @return  bool
     */
    public static function isExpired(int $expiration, ?int $time = null): bool
    {
        return false;
    }

    protected function getExpirationFormat(): string
    {
        return '';
    }
}
