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
   
<div class="flex h-screen flex-col justify-center px-6 py-12 bg-gray-50 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Update the product</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form method="post" class="space-y-6" action="{{route('update', ['product' => $product])}}" >
        @csrf 
        @method('put')
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" value="{{$product->name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div class="flex space-x-3 ">
            <div class="w-1/2">
          <div class="flex items-center justify-between">
            <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
          </div>
       
          <div class="  mt-2 ">
            <input id="quantity" name="quantity" type="number" value="{{$product->quantity}}"  class="block w-full  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
            </div>

            <div class="w-1/2">
          <div class="flex items-center justify-between">
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
          </div>
          <div class=" mt-2">
            <input id="price" name="price" type="number" value="{{$product->price}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
            </div>
        </div>
  
        <div>
          <input type="submit" value="Update" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        </div>
      </form>
  
    </div>
  </div>
  
</body>
</html>