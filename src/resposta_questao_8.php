<?php

class Component {
    public function getElements(){

    }
}

class Element extends Component
{
    public function getElements(){
        return $elements;
    }
}

class Composite extends Component
{
    public function getElements(){
        return $elements;
    }
}
