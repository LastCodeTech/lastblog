<x-layout>
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="mb-6">
                <a href="{{route('index')}}" class="inline-flex items-center text-sm text-red-600 hover:text-red-800">
                    <i class="fas fa-arrow-left mr-2"></i> Back to post
                </a>
            </div>
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Blog Post</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Update your post content, title, or category.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{route('update',$blog->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                    <div class="mt-1">
                                        <input type="text" id="title" name="title" 
                                            class="shadow-sm focus:ring-red-500 focus:border-red-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" 
                                            placeholder="Enter a compelling title" value="{{$blog->title}}">
                                             @error('title')
                                            <h1 class="text-base font-semibold text-red-500">{{$message}}</h1>
                                            @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                                    <select id="category" name="categories_id" 
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm">
                                        <option value=''>Choose Category</option>
                                        @foreach($categories as $category)
                                         <option value='{{$category->id}}' {{$blog->categories_id==$category->id ? 'selected':''}}>{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                     @error('categories_id')
                                            <h1 class="text-base font-semibold text-red-500">{{$message}}</h1>
                                            @enderror
                                </div>

                                <div>
                                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                    <div class="mt-1">
                                        <textarea id="content" name="content" rows="15" 
                                            class="shadow-sm focus:ring-red-500 focus:border-red-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" 
                                            placeholder="Write your blog post content here...">{{$blog->content}}</textarea>
                                    </div>
                                     @error('content')
                                            <h1 class="text-base font-semibold text-red-500">{{$message}}</h1>
                                            @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Featured Image</label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl"></i>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus-within:outline-none">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <a href="blog-posts.html" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    Cancel
                                </a>
                                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    Publish Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>