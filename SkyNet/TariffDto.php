<?php

// тут какой-то неймспейс
//

class TariffDto
{
    public string $name;
    public float $cost;
    public int $duration; // не понятно - в днях, часах, минутах - инт для timestamp
    public int $speed;
    public string $tariffType;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TariffDto
     */
    public function setName(string $name): TariffDto
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return TariffDto
     */
    public function setCost(float $cost): TariffDto
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return TariffDto
     */
    public function setDuration(int $duration): TariffDto
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return TariffDto
     */
    public function setSpeed(int $speed): TariffDto
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return string
     */
    public function getTariffType(): string
    {
        return $this->tariffType;
    }

    /**
     * @param string $tariffType
     * @return TariffDto
     */
    public function setTariffType(string $tariffType): TariffDto
    {
        $this->tariffType = $tariffType;
        return $this;
    }


}