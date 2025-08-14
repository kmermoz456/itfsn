<?php

return [
    // Mets le hash ici (ou via .env: ADMIN_PASSWORD_HASH="...")
    'password_hash' => env('ADMIN_PASSWORD_HASH', '$2y$10$HKKt6TjJtCpoE2RRFU0N7uaFqmEo8lisk9GJj03zXGJy3HYk3JDB2'),

    // Nom de la clé de session qui prouve l'accès admin
    'session_key'   => 'admin_ok',
];
