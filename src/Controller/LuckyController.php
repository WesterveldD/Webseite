<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class LuckyController extends Controller{

    /**
     * @Route("/lucky/number")
     * @IsGranted("ROLE_USER")
     */
    public function number() {
        $number = mt_rand(0, 100);

        return$this->render('lucky_number.html.twig', [
            'number' => $number,
        ]);
    }
    
    
     /**
     * @Route("/")
     */
    public function index() {
        $number = mt_rand(0, 100);

        return$this->render('lucky_number.html.twig', [
            'number' => $number,
        ]);
    }

}
