<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TestChampions
 * @package App\Controller
 */
class TestChampions extends AbstractController
{
    /**
     * @Route("/")
     */
    public function test(): Response
    {
        $phone = '0687510283';

        return $this->render(
            'test/testChampions.html.twig',
            [
                'phone' => $phone,
            ]
        );
    }
}