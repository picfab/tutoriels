<?php

namespace tutoriels\design\specification\Specification;

use tutoriels\design\specification\Specification\SpecificationInterface;
use tutoriels\design\specification\Specification\AndSpecification;
use tutoriels\design\specification\Specification\AndNotSpecification;
use tutoriels\design\specification\Specification\OrSpecification;
use tutoriels\design\specification\Specification\OrNotSpecification;
use tutoriels\design\specification\Specification\NotSpecification;
use tutoriels\design\specification\Specification\AndRealEstateLoanSpecification;

/**
 * Class CompositeSpecification
 */
abstract class CompositeSpecification implements SpecificationInterface
{
    /**
     * {@inheritdoc}
     */
    abstract public function isSatisfiedBy($candidate);

    /**
     * @param SpecificationInterface $otherSpec An other specification
     *
     * @return AndSpecification
     */
    public function AndSpec($otherSpec)
    {
        return new AndSpecification($this, $otherSpec);
    }

    /**
     * @param SpecificationInterface $otherSpec An other specification
     *
     * @return AndNotSpecification
     */
    public function AndNot($otherSpec)
    {
        return new AndNotSpecification($this, $otherSpec);
    }

    /**
     * @param SpecificationInterface $otherSpec An other specification
     *
     * @return OrSpecification
     */
    public function OrSpec($otherSpec)
    {
        return new OrSpecification($this, $otherSpec);
    }

    /**
     * @param SpecificationInterface $otherSpec An other specification
     *
     * @return OrNotSpecification
     */
    public function OrNot($otherSpec)
    {
        return new OrNotSpecification($this, $otherSpec);
    }

    /**
     * @return NotSpecification
     */
    public function Not()
    {
        return new NotSpecification($this);
    }
}