<?php

$dbHost = 'aws-0-ap-southeast-2.pooler.supabase.com';
$dbUser = 'postgres.prmrmhcsfdkxzseeeyjd';
$dbPassword = 'gGivriPcuifj5g0q';

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser password=$dbPassword sslmode=require");

if (!$conn) {
    exit('Database connection failed.');
}
