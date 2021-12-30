<?php 


function findAllStaff() : array
{
    
$members = [];



$member1 = [
    'poste' => 'directeur',
    'nom' => 'Pif paf',
    'telephone' => '07.00.00.00.00',
    'photo' => 'https://static.vecteezy.com/ti/vecteur-libre/p1/1840612-image-profil-icon-male-icon-human-or-people-sign-and-symbol-vector-gratuit-vectoriel.jpg',
    'id' =>1,
];

$member2 = [
    'poste' => 'adjoint',
    'nom' => 'Pif paf pouf',
    'telephone' => '07.00.00.00.01',
    'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbud_0HJeLYMiS7b16rgSMgmhgyojRlH4rw8zjA9Juo22VeVtrUQhRMfjMSMmGwQV8Irg&usqp=CAU',
    'id' => 2,
];

$member3 = [
    'poste' => 'comptable',
    'nom' => 'Pif  pouf',
    'telephone' => '07.00.00.00.02',
    'photo' => 'https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_960_720.png',
    'id' => 3,
];

$member4 = [
    'poste' => 'vendeur',
    'nom' => ' paf pouf',
    'telephone' => '07.00.00.00.03',
    'photo' => 'https://img1.freepng.fr/20180714/ggq/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f1ef441.4301202215315676631268.jpg',
    'id' =>4,
];



$members[] = $member1;
$members[] = $member2;
$members[] = $member3;
$members[] = $member4;

return $members;

};


function findOneStaff(int $id) : ?array
 {
    $members = findAllStaff();

    

    foreach($members as $item)
     {

        if($item['id'] === $id) 
        {
            $member = $item;
            return $member;
        }

    }
    
   
}

?>