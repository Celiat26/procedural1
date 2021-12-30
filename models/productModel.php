<?php 


function findAllProducts() : array 
{
    


$products = [];

//Exercice créer 3 unautre tableau associatif qui aurait commme $key les clefs suivantes
// Première key : imagePath
// Deuxième key : name
// Troisième key : price
// Quatrième key : id 

//Push dans le tableau produit les différents produits


$product1 =[
    'id' => 1,
    'imagePath' => 'https://images.unsplash.com/photo-1640767014413-b7d27c58b058?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60',
    'name' => 'Légo star wars',
    'price' => 10000,

];

$product2 =[
    'id' => 2,
    'imagePath' => 'https://images.unsplash.com/photo-1640697462212-b6d88708be5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60',
    'name' => 'blabla',
    'price' => 10000,

];


$product3 =[
    'id' => 3,
    'imagePath' => 'https://images.unsplash.com/photo-1640697687394-d02650d7ecc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60',
    'name' => 'ggjngj',
    'price' => 10000,

];

$products[] = $product1;
$products[] = $product2;
$products[] = $product3;

//Le but est de boucler sur tableau produit


return $products;
}

function findOneProduct(int $id) : ?array
 {
    $products = findAllProducts();

    $product = null;

    foreach($products as $item)
     {

        if($item['id'] === $id) 
        {
            $product = $item;
            return $product;
        }

    }

}

?>