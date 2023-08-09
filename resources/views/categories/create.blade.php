<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <style>
        .custom-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }

        .custom-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #555;
        }

        .custom-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }

        .custom-input:focus {
            outline: none;
            border-color: #3490dc;
            box-shadow: 0 0 0 3px rgba(52, 144, 220, 0.1);
        }

        .custom-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: green;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .custom-button:hover {
            background-color: darkgreen;
        }

        .btn {
            display: inline-block;
            padding: 9px 18px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
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
   