<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user9-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Administrator</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'М Е Н Ю', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'График отпусков', 'icon' => 'th', 'url' => ['/vocation']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Сотрудники', 'icon' => 'circle-o', 'url' => ['/worker']],
                    ['label' => 'Отделы', 'icon' => 'circle-o', 'url' => ['/department']],
                    ['label' => 'Должности', 'icon' => 'circle-o', 'url' => ['/position']],
                    ['label' => 'Виды отпусков', 'icon' => 'circle-o', 'url' => ['/vocation-list']],
                    /*[
                        'label' => 'Сотрудники / Отделы',
                        'icon' => 'share',
                        'items' => [
                            [
                                'label' => 'Сотрудники',
                                'icon' => 'circle-o',
                                'url' => ['/worker'],
                            ],
                            [
                                'label' => 'Отделы',
                                'icon' => 'circle-o',
                                'url' => ['/department'],
                            ],
                            [
                                'label' => 'Должности',
                                'icon' => 'circle-o',
                                'url' => ['/position'],
                            ],
                            [
                                'label' => 'Виды отпусков',
                                'icon' => 'circle-o',
                                'url' => ['/vocation-list'],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
