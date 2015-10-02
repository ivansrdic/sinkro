        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Sinkro d.o.o.<img src="{{ asset('images/logo/sinkro_logo.png') }}" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Naslovnica</a></li>
                        <li><a href="{{ route('search') }}">Pretraga</a></li>
                        <li><a href="{{ route('aboutus') }}">O nama</a></li>
                        <li><a href="{{ route('contact') }}">Kontakt</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->