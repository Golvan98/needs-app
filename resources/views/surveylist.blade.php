<x-layout>


<div id="body" class="bg-gray-300 flex-auto"> 


    <article class="bg-gray-500 flex">     

    
        @foreach($surveys as $survey)

        <article class="flex-auto items-center justify-center text-center bg-green-300 flex-auto font-bold border border-red-500">
            <a href="/survey/{{$survey->id}}"> {{$survey->survey_name}} </a>
        </article>
        @endforeach
       
    </article>
        
      

    

</div>





</x-layout>