<?php
namespace Icecave\Collections;

// @codeCoverageIgnoreStart

/**
 * A Sequence is a variable-sized collection whose elements are arranged in a strict linear order.
 */
interface ISequence extends ICollection
{
    /**
     * Fetch the first element in the sequence.
     *
     * @return mixed The first element in the sequence.
     * @throws Exception\EmptyCollectionException if the collection is empty.
     */
    public function front();

    /**
     * Fetch the first element in the sequence.
     *
     * @param mixed &$element Assigned the element at the front of collection.
     * @return boolean True is the element exists and was assigned to $element; otherwise, false.
     */
    public function tryFront(&$element);

    /**
     * Fetch the last element in the sequence.
     *
     * @return mixed The first element in the sequence.
     * @throws Exception\EmptyCollectionException if the collection is empty.
     */
    public function back();

    /**
     * Fetch the last element in the sequence.
     *
     * @param mixed &$element Assigned the element at the front of collection.
     * @return boolean True is the element exists and was assigned to $element; otherwise, false.
     */
    public function tryBack(&$element);

    /**
     * Create a new sequence with the elements from this sequence in sorted order.
     *
     * It is not guaranteed that the concrete type of the sorted collection will match this collection.
     *
     * @param callable|null $comparator A strcmp style comparator function.
     *
     * @return ISequence
     */
    public function sorted($comparator = null);

    /**
     * Create a new sequence with the elements from this sequence in reverse order.
     *
     * It is not guaranteed that the concrete type of the reversed collection will match this collection.
     *
     * @return ISequence The reversed sequence.
     */
    public function reversed();

    /**
     * Create a new sequence by appending the elements in the given sequence to this sequence.
     *
     * @param traversable,... The sequence(s) to append.
     *
     * @return ISequence A new sequence containing all elements from this sequence and $sequence.
     */
    public function join($sequence);
}
