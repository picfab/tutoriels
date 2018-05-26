<?php

namespace tutoriels\design\specification\Specification;

/**
 * Class ContractSpecification
 */
class ContractSpecification extends CompositeSpecification
{
    /**
     * Checks if the client has a contract
     *
     * @param Client $client
     *
     * @return boolean
     */
    public function isSatisfiedBy($client)
    {
        return $client->getContract() != null;
    }
}