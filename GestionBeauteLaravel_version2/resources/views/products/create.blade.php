@extends('layouts.app')

@section("content")

    <div class="box-border flex flex-col pt-3 pr-4 min-h-full">
        <h1 class="mb-8 text-3xl font-bold">
          <a class="text-indigo-400 hover:text-indigo-600" href="{{route('products.index')}}">Product</a>
          <span class="text-indigo-400 font-medium">/</span> Create
        </h1>
        <div class="w-500 bg-white rounded-md shadow overflow-hidden text-2xl border border-solid">
        
          <form  action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
                <div class="flex flex-col py-2">
                    <span> Product Image</span>
                    <input type="file" name="image"  id="image" value="{{old('image')}}"  placeholder="Select image" class="border  p-1 rounded-md @error('image') border-red-500 @enderror"/>
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-2">
                    <span>Product Name</span>
                    <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="service name" class="border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col py-2">
                    <span>Description</span>
                    <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="Product Description" class="border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                   
                </div>

                <div class="flex flex-col py-2">
                    <span>Price in FCFA</span>
                    <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="service price" class="border  p-1 rounded-md @error('price') border-red-500 @enderror" />
                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-2">
                    <span>Product Categorie</span>

                    @forelse ($categories as $categorie )
                    <label class="mr-3">
                        <input type="radio" name="categorie_id" value="{{$categorie->id}}" id="categorie_id">{{$categorie->name}}
                    </label>
                    @empty
                    <span>Aucune gategorie</span>
                    @endforelse
                </div>
            </div>
            <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
                <button type="submit" class=" bg-blue-500 p-2 rounded-md text-white hover:text-indigo-600" href="{{route('products.index')}}">Create Product</button>
            </div>
          </form>
        </div>
      </div>

@endsection