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
            $this->root->append($this->head($settings->head));
            $this->root->append($this->body($settings->body));
        }
        public function set($prop, $val){
            $this->project[$prop] = $val;
        }
        public function get($prop){
            return $this->project[$prop];
        }
        public function head($settings){
            $head = new Node("head");
            $head->append(
                            new Node("title", null, $settings->title)
                        )->append(
                            new Node("meta", ["charset" => "utf-8"])
                        )->append(
                            new Node("meta", ["http-equiv" => "X-UA-Compatible", "content" => "IE=edge"])
                        )->append(
                            new Node("meta", ["name"=>"viewport", "content"=>"width=device-width, initial-scale=1"])
                        );
            foreach($settings->css as $href){
                $head->append(new Node("link", ["rel" => "stylesheet", "type" => "text/css", "href" => $href]));
            }
            foreach($settings->js as $src){
                $head->append(new Node("script", ["src" => $src]));
            }
            $this->root->append($head);
        }
        
        public function body($settings){
            
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
            echo $node->postInner;
            echo $node->postCloseTag;
        }
        public function build(){
            echo "<!DOCTYPE html>";
            $this->stringify($this->root);
        }
    }
?>