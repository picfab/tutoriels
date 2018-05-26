<?php

namespace tutoriels\design\specification\Specification;

/**
 * Class SalarySpecification
 */
class SalarySpecification extends CompositeSpecification
{
    const SALARY = 2000;

    /**
     * Checks if the client has a valid monthy pay
     *
     * @param Client $client
     *
     * @return boolean
     */
    public function isSatisfiedBy($client)
    {
        return $client->getSalary() >= self::SALARY;
    }
}