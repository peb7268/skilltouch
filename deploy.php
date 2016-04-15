<?php
#chet
require 'recipe/wordpress.php';

server('prod', '66.147.244.164', 22)
->user('')
->password('')
->stage('production')
->env('deploy_path', '/home5/reloboxc/public_html/skilltouch.com/wp-content/themes'); // Define the base path to deploy your project to.

set('repository', 'https://github.com/peb7268/skilltouch.git');
