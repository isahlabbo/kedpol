<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}} | Welcome</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}" type="text/css" media="all">
        <script src="{{asset('assets/js/jquery-1.8.2.min.js')}}"></script>
        <script src="{{asset('assets/js/cufon-yui.js')}}"></script>
        <script src="{{asset('assets/js/cufon-replace.js')}}"></script>
        <script src="{{asset('assets/js/Myriad_Pro_300.font.js')}}"></script>
        <script src="{{asset('assets/js/Myriad_Pro_400.font.js')}}"></script>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body id="page1">
<!-- START PAGE SOURCE -->
<div class="body1"></div>
<div class="body2">
  <div class="main">
    <header>
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li id="menu_active"><a href="{{route('login')}}">Login</a></li>
            <li class="bg_none"><a href="{{route('register')}}">Register</a></li>
          </ul>
        </nav>
        <h1><a href="#" id="logo">{{config('app.name')}}</a></h1>
      </div>
      <div class="wrapper">
        <article class="col1 pad_left2">
          <div class="text1">Kebbi State <span>Digital Politics</span></div>
          <p>We aim to collect the relevant and reliable information of 
          work done by our heros in politics of kebbi state in the archievement of our community</a> </p>
        </article>
      </div>
    </header>
  </div>
</div>
<div class="body3">
  <div class="main">
    <section id="content_top">
      <article class="col1 pad_left2">
        <ul class="list1">
          <li> <span class="box1">1</span> <strong>Zone</strong> consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor . <a href="#" class="arrow"></a></li>
          <li> <span class="box1">2</span> <strong>Local Government</strong> consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non. <a href="#" class="arrow"></a></li>
          <li> <span class="box1">3</span> <strong>Ward</strong> consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non. <a href="#" class="arrow"></a></li>
          <li> <span class="box1">4</span> <strong>Polling Unit</strong> consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non. <a href="#" class="arrow"></a></li>
          <li> <span class="box1">5</span> <strong>Eligible Voters</strong> consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non. <a href="#" class="arrow"></a></li>
        </ul>
      </article>
    </section>
  </div>
</div>
<div class="main">
  <section id="content">
    <div class="wrapper pad_bot1">
      <article class="col1 pad_left2">
        <h2>Vission</h2>
        <p><strong>Eusus consequam vitae habitur</strong> - amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros maurien ulla facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</p>
        <a href="#" class="link1">Read More</a> </article>
      <article class="col2 pad_left1">
        <h2 class="color1">Mission</h2>
        <figure><img alt="" src="images/page1_img1.jpg" class="pad_bot1 marg_top"></figure>
        <p>Sed ut perspiciatis unomni iste natus errorsit.</p>
        <a href="#" class="link1">View More</a> </article>
      <article class="col2 pad_left1">
        <h2 class="color1">Our Target</h2>
        <figure><img alt="" src="images/page1_img2.jpg" class="pad_bot1 marg_top"></figure>
        <p>Atvero eos et accusamuse iusto odio dignissimos.</p>
        <a href="#" class="link1">View More</a> </article>
    </div>
    <div class="wrapper">
      <article class="col3">
        <h3>Kebbi Central @ {{date('Y')}}</h3>
        <div class="pad">
          <p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem </strong></p>
          <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur autoditaut.</p>
        </div>
      </article>
      <article class="col3 pad_left1">
        <h3>Kebbi North @ {{date('Y')}}</h3>
        <div class="pad">
          <ul class="list2 pad_bot1">
            <li><a href="#">Dcusantium doloremque laudantium</a></li>
            <li><a href="#">Totam rem aperiam eaque ipsa</a></li>
            <li><a href="#">Quae ab illo inventore</a></li>
            <li><a href="#">Veritatis et quasi architecto</a></li>
            <li><a href="#">Beatae vitae dicta sunt explicabo</a></li>
            <li><a href="#">Nemo enim ipsam voluptatem</a></li>
          </ul>
        </div>
      </article>
      <article class="col3 pad_left1">
        <h3>Kebbi South @ {{date('Y')}}</h3>
        <div class="pad">
          <p class="pad_bot2">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora inciduntut.</p>
        </div>
      </article>
    </div>
    
  </section>
</div>
<div class="body4">
  <div class="main">
    <div id="footer_menu">
      
    </div>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; {{date('Y')}} <a href="#">{{config('app.name')}}</a> - All Rights Reserved</p>
    <p class="rf">Powered by <a href="http://www.templatemonster.com/">Caliphate Tech Solution Limited</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>