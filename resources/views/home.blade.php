<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="h-screen flex items-center justify-center mx-auto bg-gray-50">
    <div class="w-1/2 mt-6 overflow-hidden rounded-xl bg-white px-6 shadow lg:px-4">
        <table class="min-w-full border-collapse border-spacing-y-2 border-spacing-x-2">
          <thead class="hidden border-b lg:table-header-group">
            <tr class="">
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-3">
                ID
                
              </td>
  
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-3">Name</td>
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-3">Quantity</td>
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-3">Price</td>
            </tr>
          </thead>
          <tbody class="bg-white lg:border-gray-300">
            @foreach($products as $product )
                <tr>
                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{$product->id}}</td>
                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{$product->name}}</td>
                <td class=" whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{$product->quantity}}</td>
                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-600 sm:px-3 lg:table-cell">{{$product->price}}</td>
            
                
                <td>
            
                    <a class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-1 px-4 rounded" href="{{route('edit', ['product' => $product])}}">Edit</a>
                
                </td>
                <td>
                    <form method="post" action="{{route('delete', ['product' => $product])}}">
                        @csrf 
                        @method('delete')
                        <input class="bg-red-400 hover:bg-red-500 text-white font-bold py-0.5 px-4 rounded" type="submit" value="Delete" />
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>

        </div>
    </div>
</body>
</html>