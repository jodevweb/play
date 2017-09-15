<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{

    public function array_count_values_follow($array)
    {
        $win = false;
        foreach ($array as $key => $value) {
            if (array_key_exists($key + 1, $array) && array_key_exists($key + 2, $array) && array_key_exists($key + 3, $array)) {
                if ($value == $array[$key + 1] && $value == $array[$key + 2] && $value == $array[$key + 3]) {
                    $win = $value;
                }
            }
        }

        return $win;
    }

    /**
     * @Route("/game", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $numbers = explode(' ', $request->request->get('numbers'));

            $winner = $this->array_count_values_follow($numbers);
            $win = false;
            $response = new Response();

            if ($winner !== false) {
                $win = $this->array_count_values_follow($numbers);
            }

            $response->setContent(json_encode(array(
                'winner' => $win,
                'numbers' => $request->request->get('numbers'),
            )));

            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        return $this->render('core/index.html.twig');
    }
}
