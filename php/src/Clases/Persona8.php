<?php
namespace Clases;
class Persona8
{
    private static int $limite_edad = 66;

    public function __construct(
        private string $nom,
        private string $cognoms,
        private int $edad = 25
    ) {}

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

    public static function modificaLimite(int $nuevoLimite): void
    {
        self::$limite_edad = $nuevoLimite;
    }

    function getNombreCompleto(): string {
        return $this->getNom() . $this->getCognoms();
    }

    function estaJubilat(): bool {
        return $this->edad >= self::$limite_edad ? true : false;
    }

    public static function toHtml(Persona $p): string {
        return '<p>Nom complet: ' . $p->getNombreCompleto() . '</p>';
    }

    public function __toString(): string {
        return "Nom complet: " . $this->getNombreCompleto();
    }
}