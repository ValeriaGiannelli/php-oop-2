<!-- database dei prodotti -->

<?php

require_once __DIR__.'/../Model/Food.php';
require_once __DIR__.'/../Model/PetBed.php';
require_once __DIR__.'/../Model/Game.php';

$products = [
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'S', '0-12 mesi', 'secco'),
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'M', '1-5 anni', 'secco'),
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'XL', '>5 anni', 'secco'),

    new PetBed('Cuccia Favolosa', 105.99, 'https://coseperanimali.com/wp-content/uploads/2021/03/cuccia-per-cani-da-intenro.jpg', '<i class="fa-solid fa-dog"></i>', 'accessorio', 120, 40, 70),
    new PetBed('Cuccia Favolosa 2', 105.99, 'https://coseperanimali.com/wp-content/uploads/2021/03/cuccia-per-cani-da-intenro.jpg', '<i class="fa-solid fa-cat"></i>', 'accessorio', 70, 20, 40),

    new Game('Canna da pesca', 3.95, 'https://shop.zooplanet.it/wp-content/uploads/2023/07/A_FFP00477.jpg', '<i class="fa-solid fa-cat"></i>', 'giochi', 'caccia'),
    new Game('Tiragraffi', 133.95, 'https://www.fenixshop24.com/1578-large_default/tiragraffi-angolare-per-gatti-alto-112-cm-con-corda-in-sisal-e-peluche-grigio.jpg', '<i class="fa-solid fa-cat"></i>', 'giochi', 'arrampicata'),
    new Game('Tiragraffi', 133.95, 'https://www.fenixshop24.com/1578-large_default/tiragraffi-angolare-per-gatti-alto-112-cm-con-corda-in-sisal-e-peluche-grigio.jpg', '<i class="fa-solid fa-cat"></i>', 'giochi', 'ar'),
];


