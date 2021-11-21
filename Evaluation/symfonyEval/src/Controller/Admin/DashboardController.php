<?php

namespace App\Controller\Admin;

use App\Entity\Agent;
use App\Entity\Contact;
use App\Entity\Hideout;
use App\Entity\Mission;
use App\Entity\Target;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('KGBDataAdmin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Mission', 'fas fa-chess-rook', Mission::class);
        yield MenuItem::linkToCrud('Agent', 'fas fa-id-card', Agent::class);
        yield MenuItem::linkToCrud('Target', 'fas fa-bullseye', Target::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-address-book', Contact::class);
        yield MenuItem::linkToCrud('Hideout', 'fas fa-map-marked-alt', Hideout::class);

    }
}
