<?php
namespace bangzam\belajar{
    class costumer{
        public function __construct(private string $name)
        {
            
        }
        public function sayhelo(string $name = "guest") : string {
           return "helo $name,my name is $this->name";
        }
    }
}
?>