            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="{{ (Route::CurrentRouteName() == 'admin-dashboard')?'active':''}}"> 
								<a href="{{ route('admin-dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-document"></i> <span>Blog</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="{{ (Route::CurrentRouteName() == 'category')?'ok':''}}"><a href="{{ route('category') }}">Category</a></li>
									<li class="{{ (Route::CurrentRouteName() == 'tag')?'ok':''}}"><a href="{{ route('tag') }}">Tag</a></li>
									<li class="{{ (Route::CurrentRouteName() == 'post')?'ok':''}}"><a href="{{ route('post') }}">Post</a></li>
								</ul>
							</li>

						</ul>
					</div>
                </div>
            </div>