<?php
class Node{
    public $tag;
    public $props = array();
    public $preCloseTag = ">";
    public $preInner = "";
    public $child = null;
    public $childCount = 0;
    public $postInner = "";
    public $postCloseTag = "";
    
    public function __construct($tag, $props, $preInner, $postInner){
        $this->tag = $tag;
        $this->closeTag($tag);
        if($props != null){
            $this->props = $props;
        }
        $this->preInner = $preInner;
        $this->postInner = $postInner;
    }
    private function closeTag($tag){
        $preClosed = array("img", "meta", "link", "input");
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
        return $this;
    }
}
?>