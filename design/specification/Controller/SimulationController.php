<?php

namespace tutoriels\design\specification\Controller;

use tutoriels\design\specification\Domain\Client;
use tutoriels\design\specification\Handler\SimulationHandler;
use tutoriels\design\specification\Specification\ContractSpecification;
use tutoriels\design\specification\Specification\ContributionSpecification;
use tutoriels\design\specification\Specification\SalarySpecification;

/**
 * Class SimulationController
 */
class SimulationController
{
    const SALARY = 2000;
    const CONTRIBUTION = 3000;

    protected function check()
    {
        $client = new Client();
        $simulationHandler = new SimulationHandler();

        // Simulation
        $specification = (new ContractSpecification())
            ->AndSpec(new SalarySpecification())
            ->AndSpec(new ContributionSpecification());

        if($specification->isSatisfiedBy($client)){
            $simulationHandler->process($client);
        }
    }

    // ...
}