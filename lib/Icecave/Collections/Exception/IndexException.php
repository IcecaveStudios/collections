<?php
namespace Icecave\Collection\Exception;

use Exception;
use OutOfBoundsException;

/**
 * The index (subscript) of a random-access sequence was out of range.
 */
class IndexException extends OutOfBoundsException implements ICollectionException
{
    /**
     * @param integer $index The out-of-range index.
     * @param Exception|null The previous exception, if any.
     */
    public function __construct($index, Exception $previous = null)
    {
        parent::__construct('Index ' . $index . ' is out of range.', 0, $previous);
    }
}