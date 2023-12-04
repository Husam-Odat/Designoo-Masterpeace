@extends('Dash.Master')

 @section('Title')
    Edit inventory
 @endsection

 @section('content')


    




<div class="content">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="margin:auto">
                <div class="signup-content">
                    <form method="post" action="{{route('inventory.update',$inventory->id)}}" enctype="multipart/form-data"  id="signup-form"  class="signup-form">
                        @method('PUT')
                       @csrf
                        <h2 class="form-title mb-4" style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Update inventory</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" value="{{ $inventory->name }}" id="name" placeholder="name"/>
                            <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="quantity" value="{{ $inventory->quantity }}" id="quantity" placeholder="quantity"/>
                            <span style="color:red">@error('quantity'){{ $message }} @enderror</span><br><br>
                        </div>
                       
                        {{-- <div class="form-group">
                            <input type="text" class="form-input" name="id" value="{{ $category->id }}" id="name" placeholder="category_id"/>
                            <span style="color:red">@error('id'){{ $message }} @enderror</span><br><br>

                        </div> --}}
                      
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="description" value="{{ $inventory->description}}" placeholder="Description"/>
                          
                        </div> --}}
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="price" value="{{ $inventory->price}}" placeholder="price"/>
                          
                        </div> --}}
                     
                        
                        {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="password" id="password" placeholder="price"/>
                           
                        </div> --}}
                        {{-- <div class="form-group">
                            <input type="file" class="form-input" name="image" id="image" accept="image/*">
                        </div> --}}
                        {{-- <div class="form-group">
                            <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                            <img src="/images/{{ $category->image }}" width="200px" class="mt-4"> --}}
                            {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}

                             {{-- </div> --}}
                           
                            
                     
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update" style="color: rgb(10, 10, 105);"/>
                        </div>
                        
                          
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>






  
    
@endsection