<?php
include "includes/person.php";
?>
<?php
    $person1 = new Person("Ahmed", "Blue", 21);
    echo $person1->getName();
    echo $person1->eyeColor;
    $person1->setName("Jogy");
    echo $person1->name;

?>