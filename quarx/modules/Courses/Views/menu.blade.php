<li class="sidebar-header">Courses</li>
<li class=" dropdown @if (Request::is('quarx/courses') || Request::is('quarx/courses/*')) active @endif">
	<a href="{{ url('quarx/courses') }}">
		<span class="fa fa-file"></span>
		Courses
	</a>
</li>
<li class=" dropdown @if (Request::is('/quarx/coursecategorys/list') || Request::is('/quarx/coursecategorys/*')) active @endif">
	<a href="{{ url('/quarx/coursecategorys') }}">
		<span class="fa fa-file"></span>
		Categories
	</a>
</li>
<li class=" dropdown @if (Request::is('quarx/courses/category/list') || Request::is('quarx/courses/category/*')) active @endif">
	<a href="{{ url('quarx/courses/category/list') }}">
		<span class="fa fa-file"></span>
		Teachers
	</a>
</li>
<li class=" dropdown @if (Request::is('quarx/courses/category/list') || Request::is('quarx/courses/category/*')) active @endif">
	<a href="{{ url('quarx/courses/category/list') }}">
		<span class="fa fa-file"></span>
		Students
	</a>
</li>

<li class="menulist">
   <a  class="sub-menu-parent" data-toggle="dropdown">Gadget Apps<b class="caret visible-xs"></b></a>
   <ul class="" style="visibility: hidden">
      <li><a href="headless-devices.html">Headless Devices</a></li>
      <li><a href="wearable-apps.html">Wearable Apps</a></li>
      <li><a href="settop-box.html">Settop Box</a></li>
      <li><a href="google-glass.html">Google Glass</a></li>
   </ul>
</li>