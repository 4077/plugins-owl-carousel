<?php namespace plugins\owlCarousel\controllers;

class Main extends \Controller
{
    public function bind()
    {
        $this->js('owl.carousel');
        $this->css('owl.carousel');
        $this->css('owl.theme.default');

        $this->js(':.bind', [
            'selector' => $this->data['selector'],
            'options'  => $this->data('options')
        ]);
    }
}
