<!DOCTYPE html>
<html>
    <head>
        <title>e-Beaver::Admin</title>
        @include('admin.blocks.metas')
        @include('admin.blocks.style-sheets')
    </head>
    <body>
       
            @include('admin.blocks.header')
            
                    <div>
                        @yield('body')
                    </div> 
                
                @include('admin.blocks.footer')
          
            @include('admin.blocks.menu')
      
        @include('admin.blocks.scripts')
    </body>
</html>