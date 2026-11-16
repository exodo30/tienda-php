<?php
function conectar(): PDO {
    return new PDO(
        'pgsql:host=localhost;port=5432;dbname=tienda',
        'postgres',
        '12345',  // la que pusiste al instalar PostgreSQL
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
}
