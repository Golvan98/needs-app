<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div id="main" class="flex-no-wrap">


        <div>
            <header class="flex bg-red-500">   
                <div class="bg-red-500 flex-auto"> Header 1 </div>
                <div class="bg-red-500 flex-auto"> Header 2</div>
                <div class="bg-red-500 items-right"> Header 3</div>
            </header>
        </div>


    <div id="container" class="flex">

        <div id="nav" class="bg-gray-900 px-12 text-gray-100 font-bold grow-0"> nav area
            <nav>
            <ul class="space-y-12"> 
                <a href="/home"><li class="text-gray-100 font-bold"> Home </li> </a>
                <li class="text-gray-100 font-bold"> Grades </li>
                <li> <a href="/surveylist">  Surveys </li> </a>
            </ul>     
            </nav>
        </div>
        
     {{ $slot }}
        

</div>

<footer class="bg-gray-500">
    FOOTER 
</footer>




















</html>