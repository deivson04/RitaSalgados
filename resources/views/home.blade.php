@extends('layouts.app')

@section('conteudo')

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="form-group row"></i></li>
          <!--li><i class="far fa-envelope rgtspace-5"></i>Ritathais@gmail.com</li-->
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="/" title="Home"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="sacola de kits"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Pesquisa">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        <!-- ################################################################################################ -->
        <h1><a href="/">DONA RITA SALGADOS</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <!--nav id="mainav" class="fl_right"> 
        ############################################################################################## 
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
              <li><a href="pages/font-icons.html">Font Icons</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
         ################################################################################################ 
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--div id="pageintro" class="hoc clear"> 
     ################################################################################################ 
    <article>
      <h3 class="heading">Finibus dictum lobortis</h3>
      <p>Libero sed ullamcorper nibh dignissim et curabitur cursus scelerisque metus sit amet sodales justo auctor sit amet proin quis lacus non nisi.</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Pharetra etiam</a></li>
          <li><a class="btn inverse" href="#">Sagittis massa</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Tipo de kit 01</h6>
              <p>Aenean metus purus consectetur ac sagittis in malesuada quis nunc ut sed risus nulla etiam gravida velit.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Tipo de kit 02</h6>
              <p>Nec tincidunt maximus ex orci sollicitudin metus ut lacinia ligula nisi vel neque sed non quam eleifend.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Tipo de kit 03</h6>
              <p>Pharetra etiam ut nisi non mi scelerisque consectetur maecenas vel elementum lectus cras maximus finibus.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!--hr class="btmspace-80">
    <!-- ################################################################################################ 
    <section id="overview">
      <div class="sectiontitle">
        <p class="nospace font-xs">Integer facilisis enim sollicitudin</p>
        <p class="heading underline font-x2">Dolor ut pellentesque</p>
      </div>
      <ul class="nospace group btmspace-80">
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-tape"></i></a>
              <h6 class="heading">Efficitur auctor</h6>
            </div>
            <p>Cras dui ac pretium egestas nunc maecenas scelerisque leo eget enim interdum at vulputate lorem pretium in.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-table-tennis"></i></a>
              <h6 class="heading">Tempor aliquam</h6>
            </div>
            <p>Sagittis arcu a magna eget cursus lacus consectetur proin imperdiet bibendum elit id molestie ipsum ut tellus.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-people-carry"></i></a>
              <h6 class="heading">Metus convallis</h6>
            </div>
            <p>Orci blandit ac mauris ac gravida maximus nulla curabitur convallis massa sed urna placerat sed tempor velit.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">Mattis vestibulum</a></footer>
    </section>
     ################################################################################################ 
     / main body -->
    <!--div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ >
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <section id="splitfifty" class="hoc container clear">
    <div class="sectiontitle">
      <p class="nospace font-xs">Magna ultrices eleifend suspendisse</p>
      <p class="heading underline font-x2">Posuere vivamus semper</p>
    </div>
    <div class="bgded clear" style="background-image:url('images/demo/backgrounds/03.png');"> 
      <!-- ################################################################################################ >
      <article>
        <h6 class="heading font-x2">Tellus nec mollis sem</h6>
        <p>lacus dui pretium non elit ac interdum ullamcorper purus ut ultricies ullamcorper convallis morbi bibendum sapien in odio finibus sit amet lacinia dolor dapibus in nisl erat consectetur eu blandit.</p>
        <footer><a class="btn" href="#">Fermentum felis</a></footer>
      </article>
      <!-- ################################################################################################ >
    </div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ >
    <div class="sectiontitle">
      <p class="nospace font-xs">Id elementum lobortis justo donec</p>
      <p class="heading underline font-x2">Rutrum sed ligula viverra</p>
    </div>
    <ul class="nospace group team">
      <li class="one_quarter first">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>A. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>B. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>C. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong>D. Doe</strong> <em>Job Title Here</em></figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ >
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ >
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ >
    <div class="sectiontitle">
      <p class="nospace font-xs">Nisl vitae mauris ipsum  eget</p>
      <p class="heading underline font-x2">Tincidunt elit velit auctor</p>
    </div>
    <ul id="stats" class="nospace group">
      <li><i class="fab fa-sticker-mule"></i>
        <p><a href="#">123</a></p>
        <p>Phasellus tincidunt</p>
      </li>
      <li><i class="fab fa-pied-piper-alt"></i>
        <p><a href="#">1234</a></p>
        <p>Egestas maximus</p>
      </li>
      <li><i class="fas fa-globe"></i>
        <p><a href="#">12345</a></p>
        <p>Aliquam neque</p>
      </li>
      <li><i class="fas fa-ribbon"></i>
        <p><a href="#">6789</a></p>
        <p>Curabitur sodales</p>
      </li>
    </ul>
    <!-- ################################################################################################ >
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ >
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/04.png');">
  <section id="testimonials" class="hoc clear"> 
    <!-- ################################################################################################ >
    <div class="one_half overlay">
      <ul class="nospace">
        <li>
          <blockquote>suscipit tellus non ligula mattis quis iaculis nunc lobortis vestibulum vehicula bibendum malesuada curabitur quis interdum mi vestibulum consectetur leo ut viverra sagittis sapien orci rhoncus nisi.</blockquote>
          <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
            <figcaption>
              <h6 class="heading">A. Doe</h6>
              <em>CEO / Odio tristique quis</em></figcaption>
          </figure>
        </li>
        <li>
          <footer><a class="btn inverse" href="#">View More</a></footer>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ >
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ >
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ >
    <div class="sectiontitle">
      <p class="nospace font-xs">Luctus ligula lacus non odio nunc</p>
      <p class="heading underline font-x2">Faucibus libero risus</p>
    </div>
    <ul id="latest" class="nospace group">
      <li class="one_third first">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="far fa-clock"></i>
              <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
            </li>
          </ul>
          <div class="excerpt">
            <h6 class="heading">Maecenas eu posuere velit eget ultricies enim</h6>
            <p>Sed nibh enim consequat ac tellus tempus interdum euismod ligula quisque quam nisl aliquet et facilisis eget.</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="far fa-clock"></i>
              <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
            </li>
          </ul>
          <div class="excerpt">
            <h6 class="heading">Condimentum quis arcu nullam id purus tortor</h6>
            <p>Molestie vulputate a luctus nulla nulla eleifend justo in libero feugiat congue donec sit amet pharetra velit.</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
          <ul class="nospace meta group">
            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="far fa-clock"></i>
              <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
            </li>
          </ul>
          <div class="excerpt">
            <h6 class="heading">Nulla tempor faucibus tortor nulla pretium</h6>
            <p>Cras auctor commodo metus sed pede in vitae sapien phasellus in magna sed dictum libero et nisi proin porta.</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ >
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">Dona Rita Sagados</h6>
      <ul class="faico clear"> 
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-instagram" href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <p class="nospace">Siga nossa pagina nas redes sociais.</p>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group btmspace-50">
      <div class="one_quarter first">
        <p>Sua opinião e muito importante para nosso crescimento deixe seu comentario.</p>
       
        <form method="post" action="#">
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Email</label>
           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
         </div>
          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <a href=""><button type="button" class="btn btn-primary">Enviar</button></a>
        </form>
      </div>
      
      <!-- ################################################################################################ -->
    </div>
    
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"> &copy;2021 - Todos Direitos Reservados a - <a href="/">Dona Rita sagados</a></p>
   
    <!-- ################################################################################################ -->
  </div>
</div>



@endsection