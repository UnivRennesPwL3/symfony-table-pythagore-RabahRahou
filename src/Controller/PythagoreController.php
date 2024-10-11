<?php

namespace App\Controller;

use App\Utilities\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    // Injection de la classe PythagoreUtility
    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    // Nouvelle action pour afficher la table de Pythagore
    #[Route('/pythagore/view', name: 'display_pythagore')]
    public function displayPythagoreAction(): Response
    {
        // Générer la table de Pythagore
        $tableHtml = $this->pythagoreUtility->display();

        // Rendre la vue Twig
        return $this->render('/displayPythagore.html.twig', [
            'table' => $tableHtml,
        ]);
    }
}
