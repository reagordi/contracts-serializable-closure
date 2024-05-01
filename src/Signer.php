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

interface Signer
{
    /**
     * Sign the given serializable.
     *
     * @param string $serializable
     * @return array
     */
    public function sign(string $serializable): array;

    /**
     * Verify the given signature.
     *
     * @param array $signature
     * @return bool
     */
    public function verify(array $signature): bool;
}
