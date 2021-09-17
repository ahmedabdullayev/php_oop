<?php
include "includes/person.php";
?>
<?php
    $person1 = new Person();
    $person1->setName("Ahmed");
    echo $person1->getName();
    echo $person1->name;

    $person2 = new Person();
    $person2->setName("Timmy");
echo $person2->name;
?>