<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('campes.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Campe Add</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('people.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Refugee Add</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('policeStation.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Police Station Add</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('police.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Police Add</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('hospital.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Hospital Add</span></a></li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                            class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a>
                        </li>
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i
                                    class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons
                                </span></a></li>
                    </ul>
                </li> --}}
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('hospitalStaff.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Hospital Staff Add</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('school.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Scholl Add</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('schoolStaff.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Scholl Staff Add</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('prayerPlace.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Payear Place Add</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('prayerStaff.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Payear Staff Add</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('post.index') }}" aria-expanded="false"><i
                            class="mdi mdi-chart-bubble"></i><span class="hide-menu">Post Create</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('role') }}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span
                            class="hide-menu">User Role</span></a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
