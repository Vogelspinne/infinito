<?php

namespace App\Logic\Result;

/**
 * @author kevinfrantz
 */
interface ResultInterface
{
    /**
     * Returns the Result as a string.
     *
     * @return string
     */
    //public function __toString():string;

    /**
     * Returns if the result is true.
     *
     * @return bool
     */
    public function getBool(): bool;

    public function setBool(bool $bool): void;

    /**
     * Returns the concrete result value.
     *
     * @var mixed
     */
    public function getValue();

    public function setValue($value): void;

    /**
     * Sets bool and value attribut.
     *
     * @param mixed $value
     */
    public function setAll($value): void;
}
