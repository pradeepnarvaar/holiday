 <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/user')}}">User</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{url('/product')}}"><i class="fa fa-table fa-fw"></i> Product</a>
                        </li>
                        <li>
                            <a href="{{url('/shoping')}}"><i class="fa fa-edit fa-fw"></i> Shoping</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Member Ship User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/membership')}}">Member Ship</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Booking Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/booking')}}">Booking</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>