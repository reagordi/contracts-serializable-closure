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

use Reagordi\Contracts\Exceptions\SystemException;
use Throwable;

class MissingSecretKeyException extends SystemException
{
    /**
     * Creates new exception object.
     *
     * @param string $message The Exception message to throw.
     * @param int $code The Exception code.
     * @param string $file The file where the exception occurred
     * @param int $line The line where the exception occurred
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(string $message = 'No serializable closure secret key has been specified.', int $code = 500, $file = '', int $line = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $file, $line, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'Missing Secret Key Exception';
    }
}
