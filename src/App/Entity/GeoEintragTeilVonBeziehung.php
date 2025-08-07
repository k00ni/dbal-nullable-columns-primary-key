<?php

// Auto-generated, changes are not preserved!

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Exception;

#[ORM\Entity(repositoryClass: 'App\Repository\GeoEintragTeilVonBeziehungRepository')]
class GeoEintragTeilVonBeziehung
{
    /**
     * ########################### Property id
     */

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id = 0;

    /**
     * @return positive-int
     *
     * @throws Exception
     */
    public function getId(): int
    {
        if (0 < $this->id) {
            return $this->id;
        }
        throw new Exception('id muss größer 0 sein');
    }

    public function istInitialisiert(): bool
    {
        return 0 < $this->id;
    }

    /*
     * ########################### Property vonEintrag
     */

    /**
     * @var Collection<int, GeoEintrag>
     */
    #[ORM\ManyToMany(targetEntity: GeoEintrag::class)]
    #[ORM\JoinTable(name: 'GeoEintragTeilVonBeziehungVonEintrag')]
    private Collection $vonEintrag;

    /**
     * @return Collection<int, GeoEintrag>
     */
    public function getVonEintrag(): Collection
    {
        return $this->vonEintrag;
    }

    public function addVonEintrag(GeoEintrag $vonEintrag): static
    {
        if (!$this->vonEintrag->contains($vonEintrag)) {
            $this->vonEintrag->add($vonEintrag);
        }

        return $this;
    }

    public function removeVonEintrag(GeoEintrag $vonEintrag): static
    {
        $this->vonEintrag->removeElement($vonEintrag);

        return $this;
    }

    /*
     * ########################### Property zuEintrag
     */

    /**
     * @var Collection<int, GeoEintrag>
     */
    #[ORM\ManyToMany(targetEntity: GeoEintrag::class)]
    #[ORM\JoinTable(name: 'GeoEintragTeilVonBeziehungZuEintrag')]
    private Collection $zuEintrag;

    /**
     * @return Collection<int, GeoEintrag>
     */
    public function getZuEintrag(): Collection
    {
        return $this->zuEintrag;
    }

    public function addZuEintrag(GeoEintrag $zuEintrag): static
    {
        if (!$this->zuEintrag->contains($zuEintrag)) {
            $this->zuEintrag->add($zuEintrag);
        }

        return $this;
    }

    public function removeZuEintrag(GeoEintrag $zuEintrag): static
    {
        $this->zuEintrag->removeElement($zuEintrag);

        return $this;
    }

    /*
     * ########################### Constructor
     */

    public function __construct()
    {
        $this->vonEintrag = new ArrayCollection();
        $this->zuEintrag = new ArrayCollection();
    }
}
