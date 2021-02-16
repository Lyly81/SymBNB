<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUserType;
use App\Repository\UserRepository;
use App\Service\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminUserController extends AbstractController
{
    /**
     * @Route("/admin/users", name="admin_user_index")
     */
    public function index(UserRepository $repo)
    {
        $users = $repo->findAll();

        return $this->render('admin/user/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * Permet d'éditer un utilisateur
     * 
     * @Route("/admin/users/{id}/edit", name="admin_user_edit")
     *
     * @param User $user
     * @param EntityManagerInterface $manager
     * @param Request $request
     * @return Response
     */
    // public function edit(User $user, Request $request, EntityManagerInterface $manager)
    // {
    //     $form = $this->createForm(AdminUserType::class, $user);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $manager->persist($user);
    //         $manager->flush();

    //         $this->addFlash(
    //             'success',
    //             "L'utilisateur n°{$user->getFullName()} a bien été modifiée !"
    //         );

    //         return $this->redirectToRoute("admin_user_index");
    //     }

    //     return $this->render('admin/user/edit.html.twig', [
    //         'form'    => $form->createView(),
    //         'booking' => $user
    //     ]);
    // }
    
    /**
     * Permet de supprimer un utilisateur
     * 
     * @Route("/admin/users/{id}/delete", name="admin_user_delete")
     *
     * @param User $user
     * @param EntityManagerInterface $manager
     * @return Response
     */
    // public function delete(User $user, EntityManagerInterface $manager)
    // {
    //     $manager->remove($user);
    //     $manager->flush();

    //     $this->addFlash(
    //         'success',
    //         "L'utilisateur <strong>{$user->getFullName()}</strong> a bien été supprimé !"
    //     );

    //     return $this->redirectToRoute('admin_user_index');
    // }

}
