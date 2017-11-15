<?php

class PokerController extends Controller
{

    public function index(){

        return $this->view('poker/index');

    }

    public function start(){

        $cards = Meminuygur\Poker\PokerGame::createCards();
        $shuffler = new Meminuygur\Poker\XShuffler();
        $shuffler->shuffle($cards);

        $game = new Meminuygur\Poker\PokerGame();

        $game->start($cards, $_POST['value'], $_POST['suit']);

        return $this->view('poker/start');


    }

    public function draft(){

        $game = new Meminuygur\Poker\PokerGame();


        $chance = $game->getChance();

        $data = [
            'chance'        => $chance,
            'is_finished'   => $game->play(),
            'selected_card' => [
                'suit' => $game->player_model->getSelectedSuit(),
                'value' => $game->player_model->getSelectedValue(),
            ]
        ];

        return $this->view('poker/draft',$data);

    }

}