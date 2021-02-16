<?php

declare(strict_types=1);

namespace App\Controller;
// App est la base du projet

use App\Repository\AdRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home(AdRepository $adRepo, UserRepository $userRepo)
    {
        return $this->render(
            'home.html.twig',
            [
                'ads'   => $adRepo->findbestAds(3),
                'users' => $userRepo->findbestUsers(2)
            ]
        );
    }
}
