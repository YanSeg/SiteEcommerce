<?php


class Customers
{

    public array $items;
 
    public function __construct(array $customers)
    {
        $this->items = $customers;
    }
}

Class Customer{

    protected int $idcustomers;
    protected string $first_name;
    protected string $last_name;
    protected string $email;

    public function __construct(int $idcustomers, string $first_name, string $last_name, string $email )
    {
        $this->idcustomers =$idcustomers;
        $this->first_name = $first_name;
        $this->last_name =$last_name;
        $this->email =$email;

    }

    function getIdcustomers(): int
    {
        return $this->idcustomers;
    }
    function getFirstname(): string
    {
        return $this->first_name;
    }
    function getLastname(): string
    {
        return $this->first_name;
    }
    function getemail(): string
    {
        return $this->email;
    }

}



function displayCustomers(Customers $customers)
{
    foreach ($customers->items as $itemData) {
        $item = new Customer(
            $itemData['idcustomers'],
            $itemData['first_name'],
            $itemData['last_name'], 
            $itemData['email']

        );

        include "template/affichageClient.php";

    }
   
    // echo "le Prénom du clien est  ".  $item->getFirstname();
    // echo "<br>";
    // echo "le nom du clien est  ".  $item->getLastname();
    // echo "<br>";
    // echo "Son mail est  " . $item->getemail();


}


function displayCustomer(Customer $var)
{
    include "template/affichageClient.php";
  
}




// function displayCustomers ($customers)
// {
//     foreach ($customers as $itemData) {
//         $itemData = new Customers(
//             $itemData['id'],
//             $itemData['first_name'],
//             $itemData['last_name'],
//             $itemData['email']
//         );

//        var_dump($itemData);

//     }
// }
