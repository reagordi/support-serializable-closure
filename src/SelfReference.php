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

class SelfReference
{
    /**
     * The unique hash representing the object.
     *
     * @var string
     */
    public string $hash = '';

    /**
     * Creates a new self reference instance.
     *
     * @param string $hash
     * @return void
     */
    public function __construct(string $hash)
    {
        $this->hash = $hash;
    }
}
