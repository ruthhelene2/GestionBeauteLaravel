<a href="{{route('products.show',['product'=>$product])}}" class="carteProduct -z-0 cursor-pointer">
                    <img src="{{Storage::url($product->product_image)}}" alt="{{$product->product_name}}" class="w-full sm:h-48 md:45 lg:50 xl:40"><!--object-cover gere l'elargisement-->
                    <div class="m-4">
                        <span class="font-bold text-3xl sm:text-xl text-black" >{{$product->product_name}}</span><br>
                        <span class="font-bold text-3xl sm:text-xl text-black" >{{$product->product_price}}</span><br>
                        <!-- <a href="" class="text-blue-500 font-mono font-semibold text-2xl">Show</a><br> -->
                        <!-- <a href="" class="text-red-600 font-mono font-semibold text-2xl">Delete</a> -->
                    </div>
                    <div class="badge">
                        <span class="mx-2"><span class="font-bold text-3xl sm:text-xl text-black" >{{$product->time}}</span><br></span>
                    </div>
</a>
