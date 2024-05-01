<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2023 Sergej Rufov
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Contracts\SerializableClosure;

use Closure;

interface Serializable
{
    /**
     * Resolve the closure with the given arguments.
     *
     * @return mixed
     */
    public function __invoke(): mixed;

    /**
     * Gets the closure that got serialized/unserialized.
     *
     * @return Closure
     */
    public function getClosure(): Closure;
}
