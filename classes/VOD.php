<?php

class VOD{
    private array $films = [
        'Demolition man',
        'Iron man',
        'Astro boy',
        'Taxi',
        "DC's Legend's"
    ];
    private float $price;
    private static int $abonne;

    /**
     * @return array
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param array $films
     */
    public function setFilms(array $films): array
    {
        $this->films = $films;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public static function getAbonne(): int
    {
        return self::$abonne;
    }

    /**
     * @param int $abonne
     */
    public static function setAbonne(int $abonne): int
    {
        return self::$abonne = $abonne;
    }
}