<x-layout>
    <x-header />
    <body class="bg-gray-50">
    

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg p-4">
                <!-- Blog Posts Grid -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Blog Post 3 -->
                    @foreach($blogs as $blog)
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-medium text-red-600 bg-red-50 px-2 py-1 rounded">{{$blog->category->name}}</span>
                                <span class="text-xs text-gray-500">{{$blog->created_at->format('y,m,d')}}</span>
                            </div>
                            <h3 class="mt-2 text-lg font-semibold text-gray-900">{{$blog->title}}</h3>
                            <h3 class="mt-2 text-sm font-semibold ">posted by : <b class='text-blue-400'>{{Auth::user()->name}}</b></h3>
                            <p class="mt-3 text-sm text-gray-600">{{Str::of($blog->content)->words(30,'///')}}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-eye mr-1"></i> 312
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-red-600 hover:text-red-800">
                                        <a href="{{route('edit',$blog->id)}}"><i class="fas fa-edit"></i></a>
                                    </button>
                                    
                                        <form action="{{route('destroy',$blog->id)}}" method='POST' >
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:text-red-800">
                                         <i class="fas fa-trash"></i>
                                         </button>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</x-layout>