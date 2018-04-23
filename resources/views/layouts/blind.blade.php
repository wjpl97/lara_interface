<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <div class="row">
            @include('includes.header')
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="text-success">Paneles de informacion</h4>
                    </div>
                </div>
                <div class="panel-body">
                    @yield('content')
                </div>
                <div class="panel-footer">
                    <h6>Esta es información complementaria</h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>