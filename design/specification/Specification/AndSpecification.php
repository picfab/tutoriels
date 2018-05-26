<?php

namespace tutoriels\design\specification\Specification;

/**
 * Class AndSpecification
 */
class AndSpecification extends CompositeSpecification
{
    /** @var SpecificationInterface */
    private $spec;

    /** @var SpecificationInterface */
    private $otherSpec;

    /**
     * @param SpecificationInterface $spec
     * @param SpecificationInterface $otherSpec
     */
    public function __construct(SpecificationInterface $spec, SpecificationInterface $otherSpec)
    {
        $this->spec = $spec;
        $this->otherSpec = $otherSpec;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate)
    {
        return $this->spec->isSatisfiedBy($candidate) && $this->otherSpec->isSatisfiedBy($candidate);
    }
}