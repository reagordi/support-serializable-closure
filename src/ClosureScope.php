<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2023 Sergej Rufov
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Support\SerializableClosure;

use SplObjectStorage;

class ClosureScope extends SplObjectStorage
{
    /**
     * The number of serializations in current scope.
     *
     * @var int
     */
    public int $serializations = 0;

    /**
     * The number of closures that have to be serialized.
     *
     * @var int
     */
    public int $toSerialize = 0;
}
