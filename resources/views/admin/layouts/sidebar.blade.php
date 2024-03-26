   
   <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <?php foreach ($filteredMenuItems as $menuItem): ?>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end"></span>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>
                            
                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Paysans</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.paysans.create') }}" key="t-products">Create Paysans</a></li>

                                    <li><a href="{{ route('admin.paysans.index') }}" key="t-product-detail">Liste Paysans</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Produits</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="{{ route('admin.produits.create') }}" key="t-products">Create Produit</a></li>

                                    <li><a href="{{ route('admin.produits.index') }}" key="t-product-detail">Liste Produit</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">distribution</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.distributions.create') }}" key="t-invoice-list">Create Distribution</a></li>
                                    <li><a href="{{ route('admin.distributions.index') }}" key="t-invoice-detail">Liste Distribution</a></li>
                                </ul>
                            </li>


                               <li>
                                   <a href="javascript: void(0);" class="has-arrow waves-effect">
                                       <i class="bx bx-bitcoin"></i>
                                       <span key="t-crypto">Ventes</span>
                                   </a>
                                   <ul class="sub-menu" aria-expanded="false">
                                       <li><a href="{{ route('admin.ventes.create') }}" key="t-products">Create Vente</a></li>
                                       <li><a href="{{ route('admin.ventes.index') }}" key="t-products">Liste Ventes</a></li>
                                   </ul>
                               </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Dette</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.dettes.create') }}" key="t-blog-list">Create dette</a></li>
                                    <li><a href="{{ route('admin.dettes.index') }}" key="t-blog-grid">Liste dette</a></li>

                                </ul>
                            </li>





                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Stocks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href=" " key="t-inbox">Create Stocks</a></li>
                                    <li><a href="" key="t-read-email">Liste Stocks</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Annnee</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Fermer</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-aperture"></i>
                                    <span key="t-icons">Payement</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="" key="t-boxicons">Create Payement</a></li>
                                    <li><a href="" key="t-material-design">Material Design</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-share-alt"></i>
                                    <span key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
