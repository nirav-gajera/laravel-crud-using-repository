<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Categories</title>
    <style>
        .custom-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: blue;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .custom-button:hover {
            background-color: darkblue;
        }

        .custom-shadow {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .custom-table {
            width: 100%;
            font-size: 14px;
            color: #555;
        }

        .custom-table-head {
            font-size: 12px;
            color: #777;
            background-color: #f5f5f5;
        }

        .custom-table-row:nth-child(even) {
            background-color: #f2f2f2;
        }

        .custom-table-cell {
            padding: 12px;
        }

        .button-group {
            display: flex;
            align-items: center;
        }

        .custom-font-medium {
            font-weight: 500;
        }

        .custom-link {
            display: inline-block;
            padding: 4px 8px;
            background-color: green;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 8px;
        }

        .custom-link:hover {
            background-color: darkgreen;
        }

        .custom-button-delete {
            padding: 4px 8px;
            background-color: red;
            color: white;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }

        .custom-button-delete:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

    <h2>Laravel CRUD Using Repository</h2>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="mt-1 mb-4">
                    <a class="custom-button"
                       href="{{ route('categories.create') }}">{{ __('Add Category') }}</a>
                </div>
                <div class="relative overflow-x-auto custom-shadow sm:rounded-lg">
                    <table class="w-full custom-table">
                        <thead class="custom-table-head">
                            <tr>
                                <th scope="col" class="custom-table-cell">
                                    No.
                                </th>
                                <th scope="col" class="custom-table-cell">
                                    Category Name
                                </th>
                                <th scope="col" class="custom-table-cell">
                                    Slug
                                </th>
                                <th scope="col" class="custom-table-cell">
                                    Action
                               
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr class="custom-table-row">
                                <th scope="row" class="custom-table-cell custom-font-medium">
                                    {{$category->id}}
                                </th>
                                <td class="custom-table-cell">
                                    {{$category->name}}
                                </td>
                                <td class="custom-table-cell">
                                    {{$category->slug}}
                                </td>
                                <td class="custom-table-cell">
                                    <div class="button-group">
                                        <a class="custom-link" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('are you sure want to delete this ? ') }}');">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="custom-button-delete">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
