@include('Admin.layouts.header')
<body>
@include('Admin.modules.top-nav')
@include('Admin.modules.left-nav')
	@yield('content')
@include('Admin.layouts.footer')