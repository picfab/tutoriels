<?php

namespace tutoriels\design\specification\Specification;

/**
 * Class ContributionSpecification
 */
class ContributionSpecification extends CompositeSpecification
{
    const CONTRIBUTION = 3000;

    /**
     * Checks if the client has the minimum personal contribution
     *
     * @param Client $client
     *
     * @return boolean
     */
    public function isSatisfiedBy($client)
    {
        return $client->getContribution() >= self::CONTRIBUTION;
    }
}