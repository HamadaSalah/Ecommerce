@include('admin.layouts.header')
@include('admin.layouts.navbar')
  <div class="content-wrapper" style="padding-top: 30px; min-height:600px!important">
    <section class="content">
      <div class="container-fluid">
        @include('admin.layouts.messages')
        @yield('content')
      </div>
    </section>
  </div>
@include('admin.layouts.footer')
