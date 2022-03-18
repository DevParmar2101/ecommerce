<aside class="main-sidebar">

    <section class="sidebar">
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Site Content',
                        'icon' => 'arrow-right',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Index Content', 'icon' => 'arrow-right', 'url' => ['/index-content']],
                        ],
                    ],
                    ['label' => 'Section Content', 'icon' => 'arrow-right','url' => ['/section-content']],
                    ['label' => 'Blog', 'icon' => 'arrow-right','url' => ['/blog']],
                    ['label' => 'Blog Category', 'icon' => 'arrow-right','url' => ['/blog-category']],
                    ['label' => 'Car Brands', 'icon' => 'arrow-right','url' => ['/car-brands']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
