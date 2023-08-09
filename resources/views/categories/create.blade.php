<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <title>Create Category</title>
    </head>
<body>

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 custom-form">
                <h2>Create Category</h2>
                <hr>
                <form method="POST" action="{{ route('categories.store') }}"> 
                    {{ csrf_field() }}
                    <div class="mb-6">
                        <label class="custom-label"> Category Name
                            <input type="text" name="name" class="custom-input @error('name') border-red-500 @enderror"> 
                        </label>
                       
                    </div>
                    <div class="mb-6">
                        <label class="custom-label"> Slug
                            <input type="text" name="slug" class="custom-input @error('slug') border-red-500 @enderror">
                        </label>
                        
                    </div>
                    <button type="submit" class="custom-button">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary"> back</a>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
   