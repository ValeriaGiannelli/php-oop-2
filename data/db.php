<!-- database dei prodotti -->

<?php

require_once __DIR__.'/../Model/Food.php';

$products = [
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'S', '0-12 mesi', 'secco'),
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'M', '1-5 anni', 'secco'),
    new Food('Monge', 25.90, 'https://egress.storeden.net/jpg/60522e6f00f22078d0be0f11/file.jpg', '<i class="fa-solid fa-dog"></i>', 'alimento', 'XL', '>5 anni', 'secco'),
];


