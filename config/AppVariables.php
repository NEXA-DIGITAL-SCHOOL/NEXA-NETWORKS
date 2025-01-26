<?php

namespace config;

class AppVariables
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'admin';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const BASE_URL = '/NEXA-NETWORKS';
    const MAIL_HOST='smtp.gmail.com';  // Specify main and backup SMTP servers
    const MAIL_SMTP_AUTH= true;     // Enable SMTP authentication
    const MAIL_USERNAME='a';  // SMTP username
    const MAIL_PASSWORD='';     // SMTP password
    const MAIL_SMTP_SECURE= 'tls'; // Enable TLS encryption, `ssl` also accepted
    const MAIL_PORT= 587;  // TCP port to connect to
    const MAIL_SET_FROM='';
    const MAIL_SET_FROM_TITLE='Nexa.Networks';
    const MAIL_ADD_ADDRESS_TITLE='Nexa Networks';

}