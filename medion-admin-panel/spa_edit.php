<? include 'templates/header.php' ?>

<?php
require_once 'include/db.php';
?>
<?php
require_once 'views/spa_view.php';
?>
<body class="">
    <div class="wrapper ">
        <? include 'templates/sidebar.php' ?>
        <div class="main-panel">
            <? include 'templates/navbar.php'; ?>
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <? if ($_COOKIE['user'] != "") : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Настройка СПА категорий</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название категории
                                                </th>
                                                <th>
                                                    Краткое описание категории
                                                </th>
                                                <th>
                                                    Иконка
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_spa_category.php" method='POST'>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="name_category" value="">
                                                        </td>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="description_category" value="">
                                                        </td>
                                                        <td class="from-group">
                                                            <div class="select" id="select-0">
                                                                <input type="text" class="select__toggle" name="icon_category" value="Выберите иконку" data-select="toggle" data-index="-1">
                                                                
                                                                <div class="select__dropdown">
                                                                    <ul class="select__options">
                                                                        <? foreach($icons as $icon): ?>
                                                                            <li class="select__option" data-select="option" data-value="<?=$icon['name']?>" data-index="0"><span style="font-size: 30px;" class="_icon-<?=$icon['name']?>" ></span></li>
                                                                        <? endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="">
                                                            <select class="form-control" name="choice" id="choice">
                                                                <option value="add">Добавить</option>
                                                            </select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary " type="submit">Добавить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                <? foreach ($spa_category as $spa_cat) : ?>
                                                    <tr>
                                                        <form action="views/send_spa_category.php" method='POST' >
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name_category" value="<?=$spa_cat['name_category']?>">
                                                                <input class="form-control" type="hidden" name="id_category-spa" value="<?=$spa_cat['id_category-spa']?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="description_category" value="<?=$spa_cat['name_category']?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <div class="select" id="select-<?=$spa_cat['id_category-spa']?>">
                                                                    <input type="text" class="select__toggle" name="icon_category" value="<?if(!empty(trim($spa_cat['icon_category']))):?><?=$spa_cat['icon_category']?><?else:?>Выберите иконку<?endif;?>" data-select="toggle" data-index="<?if(!empty(trim($spa_cat['icon_category']))):?>0<?else:?>-1<?endif;?>">
                                                                    
                                                                    <div class="select__dropdown">
                                                                        <ul class="select__options">
                                                                            <? foreach($icons as $icon): ?>
                                                                                <li class="select__option <?if($spa_cat['icon_category']==$icon['name']): ?>select__option_selected<?endif;?>" data-select="option" data-value="<?=$icon['name']?>" data-index="0"><span style="font-size: 30px;" class="_icon-<?=$icon['name']?>" ></span></li>
                                                                            <? endforeach; ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <select class="form-control" name="choice" id="choice">
                                                                    <option value="edit">Изменить</option>
                                                                    <option value="delete">Удалить</option>
                                                                </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                <? endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Настройка СПА процедур</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Название СПА процедуры
                                                </th>
                                                <th>
                                                    Описание СПА процедуры
                                                </th>
                                                <th>
                                                    Цена
                                                </th>
                                                <th>
                                                    Колличество/<br>Длительность
                                                </th>
                                                <th>
                                                    Категория
                                                </th>
                                                <th class="text-center">
                                                    Действие
                                                </th>
                                                <th class="text-center">

                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <form action="views/send_spa_procedure.php" method=POST enctype="multipart/form-data">
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="name_spa-procedure" value="">
                                                        </td>
                                                        <td class="from-group">
                                                        <textarea class="form-control" type="text" name="description_spa-procedure" value=""></textarea>
                                                        </td>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="price_spa-procedure" value="">
                                                        </td>
                                                        <td class="from-group">
                                                            <input class="form-control" type="text" name="quantity_spa-procedure" value="">
                                                        </td>
                                                        <td>
                                                            <select name="id_category-spa">
                                                                <option value="">Выберите категорию</option>
                                                                <? foreach($spa_category as $spa_cat): ?>
                                                                    <option value="<?=$spa_cat['id_category-spa']?>"><?=$spa_cat['name_category']?></option>
                                                                <? endforeach;?>
                                                            </select>
                                                        </td>
                                                        <td class="">
                                                            <select class="form-control" name="choice" id="choice">
                                                                <option value="add">Добавить</option>
                                                            </select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-primary " type="submit">Добавить</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                                <? foreach ($spa_procedure as $spa_proc) : ?>
                                                    <tr>
                                                        <form action="views/send_spa_procedure.php" method=POST enctype="multipart/form-data">
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="name_spa-procedure" value="<?= $spa_proc['name_spa-procedure'] ?>">
                                                                <input type="hidden" name="id_spa-procedure" value="<?= $spa_proc['id_spa-procedure'] ?>"></input>
                                                            </td>
                                                            <td class="from-group">
                                                                <textarea class="form-control" type="text" name="description_spa-procedure" > <?= $spa_proc['description_spa-procedure'] ?></textarea>
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="price_spa-procedure" value="<?= $spa_proc['price_spa-procedure'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <input class="form-control" type="text" name="quantity_spa-procedure" value="<?= $spa_proc['quantity_spa-procedure'] ?>">
                                                            </td>
                                                            <td class="from-group">
                                                                <select name="id_category-spa" id="">
                                                                <option value="">Выберите категорию</option>
                                                                    <?foreach($spa_category as $spa_cat):?>
                                                                        <option value="<?=$spa_cat['id_category-spa']?>" <? if($spa_cat['id_category-spa']==$spa_proc['id_category-spa']):?>selected<?endif;?>><?=$spa_cat['name_category']?></option>
                                                                    <? endforeach;?>
                                                                </select>
                                                            </td>
                                                            <td class="">
                                                                <select class="form-control" name="choice" id="choice">
                                                                    <option value="edit">Изменить</option>
                                                                    <option value="delete">Удалить</option>
                                                                </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <button class="btn btn-primary " type="submit">Подтвердить</button>
                                                            </td>
                                                        </form>
                                                    </tr>
                                                <? endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? else : ?>
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
    <script>
        <?foreach($spa_category as $spa_cat):?>
            const select<?=$spa_cat['id_category-spa']?> = new CustomSelect('#select-<?=$spa_cat['id_category-spa']?>');
        <? endforeach;?>
    </script>
</body>
<? include 'templates/footer.php' ?>