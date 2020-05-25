<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test_route")
     */
    public function test(Request $request)
    {
        $content = "<?php die('hijacked'); ?>";

        return $this->render('test.html.twig', compact('content'));
    }
}
