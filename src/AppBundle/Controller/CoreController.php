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

<<<<<<< HEAD
    public function ai($array) {
        $win = false;
        foreach ($array as $key => $value) {
            if (array_key_exists($key + 1, $array) && array_key_exists($key + 2, $array)) {
                if ($value == $array[$key + 1] && $value == $array[$key + 2]) {
                    $win = $value;
                }
            }
        }

        if ($win !== false) {
            return $win;
        } else {
            return rand(1, 10);
        }
    }

=======
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
    /**
     * @Route("/game", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
<<<<<<< HEAD
            if ($request->request->get('role') == 'user') {
                $numbers = explode(' ', $request->request->get('numbers'));

                $winner = $this->array_count_values_follow($numbers);
                $win = false;

                if ($winner !== false) {
                    $win = $this->array_count_values_follow($numbers);
                }

                return new Response(json_encode(array(
                    'winner' => $win,
                    'numbers' => $request->request->get('numbers'),
                )));
            } elseif ($request->request->get('role') == 'ai') {
                $numbers = explode(' ', $request->request->get('numbers'));
                return new Response(json_encode(array(
                    'numbers' => $this->ai($numbers),
                )));
            }
=======
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
>>>>>>> 4d70fb631836e09249a3a8fc711ebf46df946409
        }

        return $this->render('core/index.html.twig');
    }
}
