<?php

// Function to generate property names dynamically
function variables() {
    return ['codigo'=>'10152025', 'idade'=>22, 'nome'=>'Luis Cesar', 'altura'=>1.55];
}

class pessoa {
    private $properties = [];

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __get($name) {
        return $this->properties[$name] ?? null;
    }

    public function initializeProperties() {
        $vars = variables();
        foreach ($vars as $key => $var) {
            $this->$key = $var; // Initialize properties with values
        }
    }
}

$pessoa1 = new pessoa();
$pessoa1->initializeProperties();

foreach (variables() as $key => $value) {
    echo $pessoa1->$key . "<br/>"; 
}
?>







