<?php

namespace tutoriels\design\specification\Specification;

/**
 * Class SpecificationInterface
 */
interface SpecificationInterface
{
    /**
     * Checks the business rules
     *
     * @param $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate);

    /**
     * @param $otherSpec  An other specification
     */
    public function AndSpec($otherSpec);

    /**
     * @param $otherSpec  An other specification
     */
    public function AndNot($otherSpec);

    /**
     * @param $otherSpec  An other specification
     */
    public function OrSpec($otherSpec);

    /**
     * @param $otherSpec  An other specification
     *
     * @return OrNotSpecification
     */
    public function OrNot($otherSpec);

    /**
     * @return NotSpecification
     */
    public function Not();
}