@include("site.layout.head")

<body>
    <div class="page-wrapper">
        @include("site.layout.header")
        
            @yield('content')

      

    </div>


    @include("site.layout.footer")
