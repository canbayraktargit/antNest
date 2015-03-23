<?php
class Node{
    public $tag;
    public $props = array();
    public $preCloseTag = ">";
    public $preInner = "";
    public $child = null;
    private $childCount = 0;
    public $postInner = "";
    public $postCloseTag = "";
    
    public function __construct($tag){
        $this->tag = $tag;
        $this->closeTag($tag);
    }
    private function closeTag($tag){
        $preClosed = ["img", "meta", "link", "input"];
        foreach($preClosed as $t){
            if(strcmp($t, $tag) == 0){
                $this->preCloseTag = " />";
                return;
            }    
        }
        $this->postCloseTag = "</".$tag.">";
    }
    public function append($node){
        $this->child[$this->childCount] = $node;
        $this->childCount += 1;
    }
}
?>