
<!--- NAVIGATION --->
<nav class="navbar navbar-expand-lg navbar-light bg-light text-capitalize main-font-family">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{asset('assets')}}/imgs/logo.png" alt="#" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="show-menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#room">rooms</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Features
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">link</a>
                        <a class="dropdown-item" href="#">Another link</a>
                        <a class="dropdown-item" href="#">Another link</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#blog">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contacts</a>
                </li>
                <li class="nav-item book d-flex align-items-center">
                    <a class="nav-link" href="#">book now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- /NAVIGATION --->
