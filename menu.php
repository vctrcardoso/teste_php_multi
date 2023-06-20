<?php
$listaMenu = [
    'Dashboard' => [
        'link' => 'index.php',
        'icon' => 'fa fa-home'
    ],
    'Cadastro' => [
        'link' => 'javascript:;',
        'icon' => 'fa fa-file-text',
        'submenu' => [
            'Cliente',
            'Fornecedor',
            'Perfil de acesso',
            'Produtos',
            'Usuário'
        ]
    ],
    'Relatório' => [
        'link' => 'javascript:;',
        'icon' => 'fa fa-bar-chart-o',
        'submenu' => [
            'Cliente',
            'Faturamento',
            'Produtos'
        ]
    ],
];
?>

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <?php
            foreach ($listaMenu as $nomes => $menu) {

                echo '<li class="' . ($nomes == 'Dashboard' ? 'start active' : '') . '">';
                echo '<a href="' . $menu['link']  . '">';
                echo '<i class="' . $menu['icon'] . '"></i>';
                echo ' <span class="title">' . $nomes . '</span>' . ($nomes == 'Dashboard' ? '<span class="selected"></span>' : '<span class="arrow "></span>') . '
                        </a>';

                if ($menu['submenu'] && count($menu['submenu']) > 0) {
                    echo '<ul class="sub-menu">';
                    foreach ($menu['submenu'] as $submenu) {
                        echo '<li>';
                        echo '<a href="#">' . $submenu . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }

            ?>
            <!-- END SIDEBAR MENU -->
    </div>
</div>