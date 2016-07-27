<?php

class NameGenerator {
    
    private $first = array();
    private $last = array();
    private $either = array();
    
    public function __construct() {
        $this->first = explode(PHP_EOL, trim(file_get_contents('../data/first')));
        $this->last = explode(PHP_EOL, trim(file_get_contents('../data/last')));
        $this->either = explode(PHP_EOL, trim(file_get_contents('../data/either')));
    }
    
    public function getName() {
        $firstOptions = array_merge($this->first, $this->either);
        $lastOptions = array_merge($this->last, $this->either);
        
        $firstIndex = rand(0,count($firstOptions) - 1);
        $lastIndex = rand(0,count($lastOptions) - 1);
        
        return $firstOptions[$firstIndex] . $lastOptions[$lastIndex];
    }
    
    public function sortNames() {
        foreach (array('first','last','either') as $type) {
            sort($this->$type);
            file_put_contents('../data/'.$type, implode(PHP_EOL, $this->$type));
        }
    }
    
}
