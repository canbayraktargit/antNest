<?php
    include 'node.php';
    class DomBuilder {
        private $project;
        private $root;
        
        public function __construct($projectName, $settings){
            $this->set("projectName", $projectName);
            foreach($settings as $prop => $val){
                $this->set($prop, $val);
            }
            $this->root = new Node("html");
            $this->root->append($this->head($settings["head"]));
            //$this->root->append($this->body());
        }
        public function set($prop, $val){
            $this->project[$prop] = $val;
        }
        public function get($prop){
            return $this->project[$prop];
        }
        public function head(){
            $head = new Node("head");
            $this->root->append($head);
            $meta = new Node("meta");
            $head->append($meta);
        }
        public function stringify($node){
            echo "<".$node->tag;
            foreach($node->props as $prop => $value){
                echo " ".$prop.' = "'.$value.'"';
            }
            echo $node->preCloseTag;
            echo $node->preInner;
            if($node->child){
                foreach($node->child as $child){
                    if($child != null){
                        $this->stringify($child);
                    }
                }
            }
            echo $node->postCloseTag;
        }
        public function build(){
            echo "<!DOCTYPE html>";
            $this->stringify($this->root);
        }
    }
?>