<?php

namespace App\Utilities;

final class PythagoreUtility
{
    /**
     * Generate a multiplication table for Pythagorean theorem.
     *
     * @return string The generated HTML table.
     */
    public function display(): string
    {
        $table = '<table border="1" cellpadding="10" cellspacing="0">';

        // Boucle pour les lignes
        for ($i = 0; $i <= 10; $i++) {
            $table .= '<tr>';
            
            // Boucle pour les colonnes
            for ($j = 0; $j <= 10; $j++) {
                if ($i == $j && $i != 0) {
                    $table .= '<td style="background-color: yellow;">X</td>'; // Mettre "X" sur la diagonale
                } else if ($i == 0) {
                    $table .= '<th>' . $j . '</th>'; // Première ligne (en-tête des colonnes)
                } else if ($j == 0) {
                    $table .= '<th>' . $i . '</th>'; // Première colonne (en-tête des lignes)
                } else {
                    $table .= '<td>' . ($i * $j) . '</td>'; // Les autres cases de la table
                }
            }

            $table .= '</tr>';
        }
        $table .= '</table>';

        return $table;
    }
}
