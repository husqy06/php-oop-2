<?php
    require_once 'address.php';
    require_once 'user.php';
    require_once 'product.php';

    $users = [
        new User(
            'Giovanni',
            'Muciaccia',
            'giovannino@mail.it',
            true,
            '26/12/1969',
            'Pebliscito',
            '12',
            'Catania',
            'Italia',
            90021
        ),
        new User(
            'Maria',
            'Schillaci',
            'maria@mail.it',
            false,
            '04/05/2000',
            'Maggiorana',
            '39',
            'Roma',
            'Italia',
            99281
        ),
        new User(
            'Julia',
            'Rossi',
            'julia@mail.it',
            false,
            '09/03/2001',
            'Maggiorana',
            '39',
            'Roma',
            'Italia',
            99281
        )
    ];

    // var_dump ($users);

    $product = [
        new Product(
            'Sony WF-XB700',
            'Elettronica',
            'Sony',
            'Auricolari True Wireless, Extra Bass con microfono integrato e autonomia fino a 18 ore',
            59.99,
            12345
        ),
        new Product(
            'De\'Longhi Dedica EC685.M',
            'Casa',
            'De\'Longhi',
            'Macchina da Caffè Espresso Manuale e Cappuccino, Caffè in Polvere o in Cialde E.S.E., 15 bar, 1350 W, Argento',
            154,
            54321
        )
    ];

    //var_dump($product);
    
?>