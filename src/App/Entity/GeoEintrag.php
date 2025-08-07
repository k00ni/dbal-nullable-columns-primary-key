<?php

// Auto-generated, changes are not preserved!

declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Exception;

#[ORM\Entity(repositoryClass: 'App\Repository\GeoEintragRepository')]
#[ORM\Index(columns: ['label'])]
class GeoEintrag
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
     * ########################### Property label
     */

    /**
     * @var non-empty-string
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 255,
        nullable: false,
        unique: false
    )]
    private string $label;

    /**
     * @return non-empty-string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param non-empty-string $label
     */
    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    /*
     * ########################### Property typ
     */

    /**
     * @var non-empty-string
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 200,
        nullable: false,
        unique: false
    )]
    private string $typ;

    /**
     * @return non-empty-string
     */
    public function getTyp(): string
    {
        return $this->typ;
    }

    /**
     * @param non-empty-string $typ
     */
    public function setTyp(string $typ): static
    {
        $this->typ = $typ;

        return $this;
    }

    /*
     * ########################### Property amtlicherRegionalSchluessel
     */

    /**
     * @var non-empty-string|null
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 12,
        nullable: true,
        unique: false
    )]
    private ?string $amtlicherRegionalSchluessel;

    /**
     * @return non-empty-string|null
     */
    public function getAmtlicherRegionalSchluessel(): ?string
    {
        return $this->amtlicherRegionalSchluessel;
    }

    /**
     * @param non-empty-string|null $amtlicherRegionalSchluessel
     */
    public function setAmtlicherRegionalSchluessel(?string $amtlicherRegionalSchluessel): static
    {
        $this->amtlicherRegionalSchluessel = $amtlicherRegionalSchluessel;

        return $this;
    }

    /*
     * ########################### Property schluesselnummer
     */

    /**
     * @var non-empty-string|null
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 5,
        nullable: true,
        unique: true
    )]
    private ?string $schluesselnummer;

    /**
     * @return non-empty-string|null
     */
    public function getSchluesselnummer(): ?string
    {
        return $this->schluesselnummer;
    }

    /**
     * @param non-empty-string|null $schluesselnummer
     */
    public function setSchluesselnummer(?string $schluesselnummer): static
    {
        $this->schluesselnummer = $schluesselnummer;

        return $this;
    }

    /*
     * ########################### Property nuts3
     */

    /**
     * @var non-empty-string|null
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 5,
        nullable: true,
        unique: true
    )]
    private ?string $nuts3;

    /**
     * @return non-empty-string|null
     */
    public function getNuts3(): ?string
    {
        return $this->nuts3;
    }

    /**
     * @param non-empty-string|null $nuts3
     */
    public function setNuts3(?string $nuts3): static
    {
        $this->nuts3 = $nuts3;

        return $this;
    }

    /*
     * ########################### Property flaecheInKm2
     */

    #[ORM\Column(
        type: Types::FLOAT,
        nullable: true,
        unique: false
    )]
    private ?float $flaecheInKm2;

    public function getFlaecheInKm2(): ?float
    {
        return $this->flaecheInKm2;
    }

    public function setFlaecheInKm2(?float $flaecheInKm2): static
    {
        $this->flaecheInKm2 = $flaecheInKm2;

        return $this;
    }

    /*
     * ########################### Property einwohnerzahl
     */

    #[ORM\Column(
        type: Types::INTEGER,
        nullable: true,
        unique: false
    )]
    private ?int $einwohnerzahl;

    public function getEinwohnerzahl(): ?int
    {
        return $this->einwohnerzahl;
    }

    public function setEinwohnerzahl(?int $einwohnerzahl): static
    {
        $this->einwohnerzahl = $einwohnerzahl;

        return $this;
    }

    /*
     * ########################### Property breitengrad
     */

    #[ORM\Column(
        type: Types::FLOAT,
        nullable: true,
        unique: false
    )]
    private ?float $breitengrad;

    public function getBreitengrad(): ?float
    {
        return $this->breitengrad;
    }

    public function setBreitengrad(?float $breitengrad): static
    {
        $this->breitengrad = $breitengrad;

        return $this;
    }

    /*
     * ########################### Property laengengrad
     */

    #[ORM\Column(
        type: Types::FLOAT,
        nullable: true,
        unique: false
    )]
    private ?float $laengengrad;

    public function getLaengengrad(): ?float
    {
        return $this->laengengrad;
    }

    public function setLaengengrad(?float $laengengrad): static
    {
        $this->laengengrad = $laengengrad;

        return $this;
    }

    /*
     * ########################### Property postleitzahl
     */

    /**
     * @var non-empty-string|null
     */
    #[ORM\Column(
        type: Types::STRING,
        length: 5,
        nullable: true,
        unique: false
    )]
    private ?string $postleitzahl;

    /**
     * @return non-empty-string|null
     */
    public function getPostleitzahl(): ?string
    {
        return $this->postleitzahl;
    }

    /**
     * @param non-empty-string|null $postleitzahl
     */
    public function setPostleitzahl(?string $postleitzahl): static
    {
        $this->postleitzahl = $postleitzahl;

        return $this;
    }

    /*
     * ########################### Constructor
     */

    public function __construct()
    {
    }
}
