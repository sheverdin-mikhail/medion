<? include 'templates/header.php'?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/admin_view.php';
?>
<body class="">
    <div class="wrapper ">
    <? include 'templates/sidebar.php' ?>
        <div class="main-panel">
        <? include 'templates/navbar.php'; ?>
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <? if ($_COOKIE['user'] != ""): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Добавить услугу</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Название 
                                            </th>
                                            <th>
                                                Описание
                                            </th>
                                            <th>
                                                Цена
                                            </th>
                                            <th >
                                                Категория
                                            </th>
                                            <th class="">
                                                Действие
                                            </th>
                                            <th class="text-right">
                                                -
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php $divisions= DivisionsView($link); ?>
                                                <tr>
                                               <form action="views/send_service.php" method=POST>
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="name_service" value="<?=$service['name_service']?>">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="description_service" ><?=$service['description_service']?></textarea>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="price_service" value="<?=$service['price_service']?>">
                                                    </td>
                                                    <td >
                                                        <select class="form-control" type="text" name="id_division" >
                                                            <? foreach($divisions as $division): ?>
                                                                <option value="<?=$division['id_division']?>">
                                                                <?=($division['name_division'])?></option>
                                                            <? endforeach; ?>
                                                        </select>
                                                    </td>
                                                    
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Добавить</button>
                                                    </td>
                                               </form>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Найти услугу</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Название 
                                            </th>
                                           
                                            <th>
                                                Поле для поиска 
                                            </th>
                                           
                                            <th class="text-right">
                                                Действие
                                            </th>
                                            
                                        </thead>
                                        <tbody>
                                            <?php $divisions= DivisionsView($link); ?>
                                                <tr>
                                               <form action="" method=GET>
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="name_service" value="<?=$service['name_service']?>">
                                                    </td>
                                                   
                                                    <td class="text-right">
                                                        <select class="form-control" name="choice" id="choice">
                                                            <option value="name">Название услуги</option>
                                                            <option value="division">Категория</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Поиск</button>
                                                    </td>
                                               </form>
                                               <? include 'views/find_service.php' ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Услуги</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Название 
                                            </th>
                                            <th>
                                                Описание
                                            </th>
                                            <th>
                                                Цена
                                            </th>
                                            <th >
                                                Категория
                                            </th>
                                            <th >
                                                Клиники
                                            </th>
                                            <th class="text-right">
                                                Действие
                                            </th>
                                        </thead>
                                        
                                        <? if($searching && count($find_services)>0): 
                                            $divisions = DivisionsView($link);  
                                            $clinics = ClinicsView($link);
                                            $services=ServicesView($link);
                                            ?>
                                            
                                            <? foreach($services as $service): ?>
                                                <? foreach($find_services as $fservice): ?>
                                                   <? if($fservice['id_service'] == $service['id_service']): ?>
                                                    <tr>
                                               <form action="views/edit_service.php" method=POST>
                                                    <td class="from-group" style="display: none;">
                                                        <input style="display" class="form-control" type="number" name="id_service" value="<?=$service['id_service']?>" >
                                                    </td>
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="name_service" value="<?=$service['name_service']?>">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="description_service" ><?=$service['description_service']?></textarea>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="price_service" value="<?=$service['price_service']?>">
                                                    </td>
                                                    <td >
                                                        <select class="form-control" type="text" name="id_division">
                                                            <? foreach($divisions as $division): ?>
                                                                <option value="<?=$division['id_division']?>" 
                                                                <?if($service['id_division'] == $division['id_division']): ?> selected="" <? endif; ?> >
                                                                <?=($division['name_division'])?></option>
                                                            <? endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td class="">
                                                        <select multiple class="form-control" name="id_clinics[]" id="clinic">
                                                            <? foreach($clinics as $clinic): ?>
                                                                <? $choices_clinic=ChoicesClinicsView($link, $service['id_service']) ?>
                                                                <option 
                                                                <?for($i=0; $i < count($choices_clinic); $i = $i + 1):
                                                                    if($choices_clinic[$i]['id_clinics'] == $clinic['id_clinics']):?>
                                                                        selected
                                                                    <? endif;
                                                                endfor;?>
                                                                value="<?=$clinic['id_clinics']?>"><?=$clinic['name_clinics']?></option>
                                                            <? endforeach; ?>
                                                            
                                                        </select>
                                                    </td>
                                                    <td class="">
                                                        <select class="form-control" name="choice" id="choice">
                                                            <option value="edit">Изменить</option>
                                                            <option value="delete">Удалить</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                    </td>
                                                    
                                               </form>
                                            </tr>
                                                    <? endif; ?>
                                                <? endforeach; ?>
                                            <? endforeach; ?>
                                               
                                            
                                        <? elseif($searching && count($find_services)==0): ?>
                                            <div class="alert alert-danger">По вашему запросу ничего не найдено- <b><a style="color: #fff;" href="services_edit.php">отменить запрос</a></b> </div>
                                        <? else: ?>
                                            <tbody>
                                            <?php 
                                                $services=ServicesView($link);
                                                $divisions = DivisionsView($link);  
                                                $clinics = ClinicsView($link);
                                            ?>
                                            <? foreach($services as $service): ?>
                                                <tr>
                                               <form action="views/edit_service.php" method=POST>
                                                    <td class="from-group" style="display: none;">
                                                        <input style="display" class="form-control" type="number" name="id_service" value="<?=$service['id_service']?>" >
                                                    </td>
                                                    <td class="from-group">
                                                        <input class="form-control" type="text" name="name_service" value="<?=$service['name_service']?>">
                                                    </td>
                                                    <td>
                                                        <textarea class="form-control" type="text" name="description_service" ><?=$service['description_service']?></textarea>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="price_service" value="<?=$service['price_service']?>">
                                                    </td>
                                                    <td >
                                                        <select class="form-control" type="text" name="id_division">
                                                            <? foreach($divisions as $division): ?>
                                                                <option value="<?=$division['id_division']?>" 
                                                                <?if($service['id_division'] == $division['id_division']): ?> selected="" <? endif; ?> >
                                                                <?=($division['name_division'])?></option>
                                                            <? endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td class="">
                                                        <select multiple class="form-control" name="id_clinics[]" id="clinic">
                                                            <? foreach($clinics as $clinic): ?>
                                                                <? $choices_clinic=ChoicesClinicsView($link, $service['id_service']) ?>
                                                                <option 
                                                                <?for($i=0; $i < count($choices_clinic); $i = $i + 1):
                                                                    if($choices_clinic[$i]['id_clinics'] == $clinic['id_clinics']):?>
                                                                        selected
                                                                    <? endif;
                                                                endfor;?>
                                                                value="<?=$clinic['id_clinics']?>"><?=$clinic['name_clinics']?></option>
                                                            <? endforeach; ?>
                                                            
                                                        </select>
                                                    </td>
                                                    <td class="">
                                                        <select class="form-control" name="choice" id="choice">
                                                            <option value="edit">Изменить</option>
                                                            <option value="delete">Удалить</option>
                                                        </select>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                    </td>
                                                    
                                               </form>
                                            </tr>
                                            <? endforeach; ?>
                                        </tbody>
                                        <? endif; ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <? else: ?>
                    <div class="alert alert-warning">Пожалуйста авторизуйтесь</div>
               <? endif; ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<? include 'templates/footer.php' ?>