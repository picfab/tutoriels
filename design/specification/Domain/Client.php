<?php

namespace tutoriels\design\specification\Domain;

/**
 * Class Client
 */
class Client
{
    /**
     * Client ID
     */
    private $id;

    /**
     * Contract employment
     */
    protected $contract = null;

    /**
     * Monthly pay
     */
    protected $salary = null;

    /**
     * Minimum personal contribution
     */
    protected $contribution = null;

    /**
     * Gets the ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the contract employment
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets the contract employment
     *
     * @return Client
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Gets the monthly pay
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets the monthly pay
     *
     * @return Client
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Gets the minimum personal contribution
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Sets the minimum personal contribution
     *
     * @return Client
     */
    public function setContribution($contribution)
    {
        $this->contribution = $contribution;

        return $this;
    }
}