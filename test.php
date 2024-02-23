<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Env</title>
</head>
<body>

<?php
class Fruits{
    // properties
    public $name;
    public $color;
    public $weight;

    // Methods
  function __construct($name, $color, $weight){

 

    function get_name(){
        return $this->name;
    }


    function get_color(){
        return $this->color;
    }

    

   

    function get_weight(){
        return $this->weight;
    }

   }
}
//    Using....
$mango = new Fruits();

// $mango->name = "Mango";

echo $mango->get_name("Mango")."<br>";

// $mango->set_color();
echo $mango->get_color("Orange")."<br>";

// $mango->set_weight(2.5);
echo $mango->get_weight(3.6)."<br>";






?>
    

<script>
    const details = {
        name:"Yusuf",
        age:23,
        friends: ['Aminu', 'Yahaya', 'Kabir']
    }

    console.log(details['name']);
    console.log(details.name);
    console.log(details.friends[1]);
</script>
</body>
</html>