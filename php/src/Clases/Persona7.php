<?php

namespace Clases;
class Persona7
{
    private string $nom;
    private string $cognoms;
    private int $edad;

    public function __construct(string $nom, string $cognoms, int $edad = 25)
    {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edad = $edad;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCognoms(): string
    {
        return $this->cognoms;
    }

    public function setCognoms(string $cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    function getNombreCompleto(): string {
        return $this->getNom() . $this->getCognoms();
    }

    function estaJubilat(): bool {
        return $this->edad >= 67 ? true : false;
    }
}