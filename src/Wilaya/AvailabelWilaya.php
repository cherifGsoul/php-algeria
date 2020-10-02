<?php

namespace Cherif\Algeria\Wilaya;

use Cherif\Algeria\Commune\Commune;

final class AvailabelWilaya
{
    /** 
     * @var Wilaya 
     */
    private Wilaya $wilaya;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var Commune[]
     */
    private $communes;

    private function __construct(Wilaya $wilaya, string $name)
    {
        $this->wilaya = $wilaya;
        $this->name = $name;
        $this->communes = [];
    }

    /**
     * @param Wilaya $wilaya
     * @param string $name
     * @return AvailableWilaya
     */
    public static function from(Wilaya $wilaya, string $name, array $communes = []): AvailabelWilaya
    {
        $availabelWilaya = new AvailabelWilaya($wilaya, $name);

        if (count($communes) > 0) {
            foreach ($communes as $commune) {
                $availabelWilaya->addCommune($commune);
            }
        }

        return $availabelWilaya;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Wilaya
     */
    public function getWilaya(): Wilaya
    {
        return $this->wilaya;
    }

    public function getCommunes(): array
    {
        return $this->communes;
    }

    public function addCommune(Commune $commune)
    {
        $this->communes[] = $commune;
    }

    public function removeCommune(Commune $commune)
    {
        $communeCount = count($this->communes);
        if ($this->hasCommunes()) {
            for ($i=0; $i < $communeCount ; $i++) { 
                $currentCommune = $this->communes[$i];
                if ($currentCommune->equals($commune)) {
                    unset($this->communes[$i]);
                }
            }
        }
    }

    public function hasCommune(Commune $commune): bool
    {
        if ($this->hasCommunes()) {
            foreach ($this->communes as $communeInWilaya) {
                if ($communeInWilaya->equals($commune)) {
                    return true;
                }
            }
        }

        return false;
    }

    public function hasCommunes(): bool
    {
        return count($this->communes) > 0;
    }
}
