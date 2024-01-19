<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/sidenavbar.css'); }} ">
    <title>Sidebar With Bootstrap</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">CodzSword</a>
                </div>
                <!-- Sidebar Navigation -->
                  <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        {{-- Tools & Components --}}
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ url('admin/index') }}" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Add Property
                        </a>
                    </li>
                    <li class="sidebar-item">
                   
                    </li>
                    <li class="sidebar-item">
                  
                    </li>
                    <li class="sidebar-item">
                      
                    </li>
                    <li class="sidebar-header">

                    </li>
                    <li class="sidebar-item">
                       
                    </li>
                </ul> 
               
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                    <!-- <div>Hii</div> -->
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <!-- <h3>Bootstrap Sidebar Tutorial</h3> -->

                    </div>
                     @yield('content')
                 </div>
            </main>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidenavbar.js') }}"></script>
</body>

</html>