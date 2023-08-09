<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Categories</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

    <h3>Laravel CRUD Using Repository</h3>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="mt-1 mb-4">
                    <a class="custom-button-edit"
                       href="{{ route('categories.create') }}">{{ __('Add Category') }}</a>
                </div>
                <div class="relative overflow-x-auto custom-shadow sm:rounded-lg">
                    <table align="center;" class="w-full custom-table">
                        <thead class="custom-table-head">
                            <tr>
                                <th width="10%"scope="col" class="custom-table-cell"> No. </th>
                                <th width="25%" scope="col" class="custom-table-cell"> Category Name </th>
                                <th width="25%" scope="col" class="custom-table-cell"> Description </th>
                                <th width="20" scope="col" class="custom-table-cell"> Action</th>
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
