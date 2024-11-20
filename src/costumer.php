<?php
namespace bangzam\belajar{
    class costumer{
        public function __construct(private string $name)
        {
            
        }
        public function sayhelo(string $name) : string {
           return "helo $name,my name is $this->name";
        }
    }
}
?>