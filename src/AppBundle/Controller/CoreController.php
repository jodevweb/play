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

    public function ai($array) {
        $win = false;
        foreach ($array as $key => $value) {
            $rand = rand(0, 1);
            if ($rand == 0) {
                if (array_key_exists($key + 1, $array) && array_key_exists($key + 2, $array)) {
                    if ($value == $array[$key + 1] && $value == $array[$key + 2]) {
                        $win = $value;
                    }
                }
            } elseif ($rand == 1) {
                if (array_key_exists($key + 1, $array)) {
                    if ($value == $array[$key + 1]) {
                        $win = $value;
                    }
                } 
            }
        }

        if ($win !== false) {
            $rand = rand(0, 1);
            if ($rand == 0) {
                return $win;
            } elseif ($rand == 1) {
                return rand(1, 10);
            }
        } else {
            return rand(1, 10);
        }
    }

    /**
     * @Route("/game", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            if ($request->request->get('role') == 'user') {
                $numbers = explode(' ', $request->request->get('numbers'));

                $winner = $this->array_count_values_follow($numbers);
                $win = false;

                if ($winner !== false) {
                    $win = $winner;
                }

                return new Response(json_encode(array(
                    'winner' => $win,
                    'numbers' => $request->request->get('numbers'),
                )));
            } elseif ($request->request->get('role') == 'ai') {
                $numbers = explode(' ', $request->request->get('numbers'));
                $number_ai = $this->ai($numbers);
                $win = false;

                if ($request->request->get('numbers_ai')) {
                    $numbers_ai = explode(' ', $number_ai . ' ' . $request->request->get('numbers_ai'));

                    $winner = $this->array_count_values_follow($numbers_ai);

                    if ($winner !== false) {
                        $win = $winner;
                    }
                }

                return new Response(json_encode(array(
                    'winner' => $win,
                    'numbers' => $number_ai,
                )));
            }
        }

        return $this->render('core/index.html.twig');
    }
}
