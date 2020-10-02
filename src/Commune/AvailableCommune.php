<?php

namespace Cherif\Algeria\Commune;

use Cherif\Algeria\Wilaya\Wilaya;

final class AvailableCommune
{
    private $commune;
    private $name;
    private $wilaya;

    private function __construct(Commune $commune, string $name, Wilaya $wilaya)
    {
        $this->commune = $commune;
        $this->name = $name;
        $this->wilaya = $wilaya;
    }

    public static function from(Commune $commune, string $name, Wilaya $wilaya): AvailableCommune
    {
        $availableCommune = new AvailableCommune($commune, $name, $wilaya);
        return $availableCommune;
    }

    public function getCommune(): Commune
    {
        return $this->commune;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWilaya(): Wilaya
    {
        return $this->wilaya;
    }

    public function isInWilaya(Wilaya $wilaya): bool
    {
        return $this->wilaya->equals($wilaya);
    }
}
