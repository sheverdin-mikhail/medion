
<?php foreach($divisions as $division){
    printf('<h2>%s</h2>', $division['Подразделение']);
    foreach($division['Услуга'] as $service){
        printf('<p>%s</p>', $service);
    }
}

