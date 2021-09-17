<?php
include "includes/person.php";
?>
<?php
    echo Person::$drinkingAge;
    Person::setDrinkingAge("19");
    echo Person::$drinkingAge;
    $person1 = new Person("ahmed", "blue", 13);
    echo $person1->getDA();

?>