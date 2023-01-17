<?php

namespace App\Models;

use App\Core\Model;

class Supplier extends Model
{
    protected int $id;
    protected string $company;
    protected string $country;
    protected string $slogan;

    /**
     * @param string $company
     * @param string $country
     * @param string $slogan
     */
    public function __construct(string $company = '', string $country = '', string $slogan = '')
    {
        $this->company = $company;
        $this->country = $country;
        $this->slogan = $slogan;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getSlogan(): string
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     */
    public function setSlogan(string $slogan): void
    {
        $this->slogan = $slogan;
    }
}