@extends('layouts.app')

@section("content")

    <div class="box-border flex flex-col ml-72 pt-3 pr-4 min-h-full">
        <h1 class="mb-8 text-3xl font-bold">
          <a class="text-indigo-400 hover:text-indigo-600" href="{{route('services.index')}}">Services</a>
          <span class="text-indigo-400 font-medium">/</span> Create
        </h1>
        <div class="w-500 bg-white rounded-md shadow overflow-hidden text-2xl border border-solid">
        
          <form  action="{{route('services.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
                <div class="flex flex-col py-2">
                    <span> Service Image</span>
                    <input type="file" name="image"  id="image" value="{{old('image')}}"  placeholder="Select image" class="border  p-1 rounded-md @error('image') border-red-500 @enderror"/>
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col py-2">
                    <span>Service Name</span>
                    <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="service name" class="border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col py-2">
                    <span>Description</span>
                    <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="service Description" class="border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
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
                    <span>Service time</span>
                    <input type="time" name="time" value="{{old('price')}}" id="time"  placeholder="service time" class="border  p-1 rounded-md @error('time') border-red-500 @enderror"/>
                    @error('time')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
                <button type="submit" class=" bg-blue-500 p-2 rounded-md text-white hover:text-indigo-600" href="{{route('services.index')}}">Create Service</button>
            </div>
          </form>
        </div>
      </div>


@endsection