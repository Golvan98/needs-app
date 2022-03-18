<x-layout>


<div id="body" class="bg-gray-300 flex-auto"> 


    <article class="bg-gray-500">     

    
       @foreach($surveys as $survey)
       <div>
       {{$survey->survey_name}}
        </div>
    

            @foreach($survey->question as $surveyquestion)

                    <div class="flex-auto"> 
                    <form method="POST" action="#"> 
                    @csrf
                    @method('DELETE')
                    {{$surveyquestion->question}} 

                    <input class=""> 
                    </input>
                    <button type="submit" 
                    
                       class="bg-red-300 text-white rounded ml-1 pb-4 px-2 hover:bg-red-500">
					    Submit Answer
						</button>
            @endforeach
						</form>	
                        
                    </div>
       @endforeach
    </article>
        
      

    

</div>





</x-layout>