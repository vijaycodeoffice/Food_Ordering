 <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Left Sidebar</li>

                <li>
                    <a href="{{ route('dashboard')}}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Country</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('countries.create') }}">
                                <span data-key="t-calendar">Add Country</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('countries') }}">
                                <span data-key="t-chat">Country List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">City</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('cities.create') }}">
                                <span data-key="t-calendar">Add City</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('cities') }}">
                                <span data-key="t-chat">City List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>


				
				 <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
						
                        <span data-key="t-apps">Hotels</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('hotels.create') }}">
                                <span data-key="t-calendar">Add Hotels</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('hotels')}}">
                                <span data-key="t-chat">Hotels List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Add-ons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('addons.create') }}">
                                <span data-key="t-calendar">Add Add-ons</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('addons') }}">
                                <span data-key="t-chat">Add-ons List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
					<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Options</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('options.create') }}">
                                <span data-key="t-calendar">Add Options</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('options') }}">
                                <span data-key="t-chat">Options List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
				<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Items Types</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('itemstypes.create') }}">
                                <span data-key="t-calendar">Add Items Types</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('itemstypes') }}">
                                <span data-key="#">Items Types List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
				



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Menu</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('menus.create') }}">
                                <span data-key="t-calendar">Add Menu</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('menus') }}">
                                <span data-key="t-chat">Menu List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
				<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Items</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('items.create') }}">
                                <span data-key="t-calendar">Add Items</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('items') }}">
                                <span data-key="t-chat">Items List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
					
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('tables.create') }}">
                                <span data-key="t-calendar">Add Tables</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('tables') }}">
                                <span data-key="t-chat">Tables List</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				
				<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Offers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('offers.create') }}">
                                <span data-key="t-calendar">Add Offers</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('offers') }}">
                                <span data-key="t-chat">Items Offers</span>
                            </a>
                        </li>

                     
                      
                     
                    </ul>
                </li>
				
				

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kichenmanagers') }}" data-key="">Kichen Manager</a></li>
                        <li><a href="{{ route('restaurantmanagers') }}" data-key="">Restaurant Manager</a></li>
                      
                    </ul>
                </li>
				
				
				   <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">Customers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login">Add Customers</a></li>
                        <li><a href="{{ route('customers') }}" data-key="t-register">Customers List</a></li>
                      
                    </ul>
                </li>
				
				   <li>
                    <a href="javascript: void(0);" class="has-arrow">
                      <i data-feather="grid"></i>
                        <span data-key="t-authentication">Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('orders.create') }}" data-key="t-login">Add Orders</a></li>
                        <li><a href="{{ route('orders') }}" data-key="order">Orders List</a></li>
                      
                    </ul>
                </li>
				
				
				  <li>
                    <a href="javascript: void(0);" class="has-arrow">
                      <i data-feather="grid"></i>
                        <span data-key="t-authentication">Langauge Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('langauges.create') }}" data-key="t-login">Add Langauge</a></li>
                        <li><a href="{{ route('langauges') }}" data-key="t-register">Langauge List</a></li>
                      
                    </ul>
                </li>
				
				
				
					  <li>
                    <a href="javascript: void(0);" class="has-arrow">
                      <i data-feather="grid"></i>
                        <span data-key="t-authentication">Loyality Points</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('loyalitypoints') }}" data-key="t-login">Points Seetings</a></li>
                        <li><a href="{{ route('referralpoints.create') }}" data-key="t-register">User Reward Points</a></li>
                      
                    </ul>
                </li>
				

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                      <i data-feather="grid"></i>
                        <span data-key="t-authentication">Referral Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
            
                        <li><a href="{{ route('referralpoints') }}" data-key="t-login">Referral Point</a></li>
                        <li><a href="{{ route('referralpoints.referraluser') }}" data-key="t-register">Referral User List</a></li>
                      
                    </ul>
                </li>

               

                <li class="menu-title mt-2" data-key="t-components">Reports</li>

              

             

              
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables">Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" data-key="t-basic-tables">Reports</a>
                        </li>
                       
                    </ul>
                </li>

            

            


             

            </ul>

           
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->