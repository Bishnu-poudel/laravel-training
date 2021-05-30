<x-admin.layout>
    <div class="az-content az-content-dashboard">
        <div class="container">
          <div class="az-content-body">
            <h2>Update Product: {{$product->product_name}}</h2>
                <form action="/admin/products/update/{{$product->id}}" method="POST">
                    @csrf
                    {{-- <x-forms.input type="text" name="full_name"/> --}}
                    Product Name: <input type="text" name="product_name" id="" class="form-control" value="{{$product->product_name}}"><br><br>
                    Product Desc: <textarea type="text" name="product_desc" id="" cols="30" rows="10" class="form-control"> {{$product->product_desc}}</textarea><br><br>
                    Price:<input type="text" name="price" id="" class="form-control" value="{{$product->price}}"><br><br>
                    Category: 
                        <x-forms.select name="category_id" class="form-control">
                            <option value="0"> Select a category</option> 
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{$category->id == $product->category_id ? "selected" : '' }} >{{$category->name }}</option>
                            @endforeach  
                        </x-forms.select><br><br>
                            {{-- <select name="category_id" id="">
                                <option value="0"> Select a category</option> 
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{$category->name }}</option>
                                    @endforeach 
                            </select><br><br> --}}
                        <input type="submit" name="submit" value="save" class="form-control"> 
                </form>
          </div>
        </div>
    </div>
</x-admin.layout>