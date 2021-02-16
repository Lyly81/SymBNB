<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Environment;

/**
 * Classe de pagination qui extrait toute notion de calcul et de récupération de données de nos controllers.
 * 
 * Elle nécessite après instanciation qu'on lui passe l'entité sur laquelle on souhaite travailler.
 */
class PaginationService
{
    /**
     * Le nom de l'entité sur laquelle on veut effectuer une pagination.
     *
     * @var string
     */
    private $entityClass;

    /**
     * Le nombre d'enregistrement à récupérer.
     *
     * @var integer
     */
    private $limit = 10;

    /**
     * La page sur laquelle on se trouve actuellement.
     *
     * @var integer
     */
    private $currentPage = 1;

    /**
     * Le manager de Doctrine qui nous permet notamment de trouver le repository dont on a besoin.
     *
     * @var EntityMangerInterface
     */
    private $manager;

    /**
     * Le moteur de template Twig qui va permettre de générer le rendu de la pagination.
     *
     * @var Twig\Environnement
     */
    private $twig;

    /**
     * Le nom de la route que l'on veut utiliser pour les boutons de la navigation.
     *
     * @var string
     */
    private $route;

    /**
     * Le chemin vers le template qui contient la pagination.
     *
     * @var string
     */
    private $templatePath;

    public function __construct(EntityManagerInterface $manager, Environment $twig, RequestStack $request, $templatePath)
    {
        $this->route        = $request->getCurrentRequest()->attributes->get('_route');
        // dump($this->route);
        // die();

        $this->manager      = $manager;
        $this->twig         = $twig;
        $this->templatePath = $templatePath;
    }

    public function setTemplatePath($templatePath) {
        $this->templatePath = $templatePath;

        return $this;
    }

    public function getTemplatePath() {
        return $this->templatePath;
    }

    public function setRoute($route) {
        $this->route = $route;

        return $this;
    }

    public function getRoute() {
        return $this->route;
    }

    public function display() {
        $this->twig->display($this->templatePath, [
            'page'  => $this->currentPage,
            'pages' => $this->getPages(),
            'route' => $this->route
        ]);
    }

    public function getPages() {
        if (empty($this->entityClass)) {
            throw new \Exception("Vous n'avez pas spécifié l'entité sur laquelle nous devons paginer ! Utilisez la méthode setEntityClass() de votre objet PaginationService !");
        }

        // 1. Connaître le total des enregistrements de la table
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll());

        // 2. Faire la division, l'arrondir et le renvoyer
        $pages = ceil($total / $this->limit);

        return $pages;
    }

    public function getData() {
        if (empty($this->entityClass)) {
            throw new \Exception("Vous n'avez pas spécifié l'entité sur laquelle nous devons paginer ! Utilisez la méthode setEntityClass() de votre objet PaginationService !");
        }
        
        // 1. Calculer l'offset
        $offset = $this->currentPage * $this->limit - $this->limit;

        // 2. Demander au repository de trouver les éléments
        $repo = $this->manager->getRepository($this->entityClass);
        $data = $repo->findBy([], [], $this->limit, $offset);

        // 3. Renvoyer les éléments en questions
        return $data;
    }

    public function setPage($page) {
        $this->currentPage = $page;

        return $this;
    }

    public function getPage() {
        return $this->currentPage;
    }


    public function setLimit($limit) {
        $this->limit = $limit;

        return $this;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function setEntityClass($entityClass) {
        $this->entityClass = $entityClass;

        return $this;
    }

    public function getEntityClass() {
        return $this->entityClass;
    }
}
