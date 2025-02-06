@props(['src', 'name','title'])
<div class="bg-white shadow-lg rounded-lg p-6">
    <img src="{{asset("$src")}}" alt="Team Member" class="w-32 h-32 rounded-full mx-auto">
    <h3 class="mt-4 text-xl font-semibold">{{$name}}</h3>
    <p class="text-gray-600"> {{$title}} </p>
</div>