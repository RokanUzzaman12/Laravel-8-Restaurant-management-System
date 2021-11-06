<x-app-layout>


    @include("admin.include.header")
    <div class="container-scroller">

    @include("admin.include.navigation")

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Foods
                    </div>
                    <div class="card-body">
                    <form method = "POST" enctype = "multipart/form-data" action = "{{route('foods.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label for = "name">Title</label>
                        <input type="text" name = "title" class= "form-control">
                        @error('title')
                        <span class = "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for = "author">Price</label>
                        <input type="text" name = "price" class= "form-control">
                        @error('price')
                        <span class = "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for = "price">Description</label>
                        <input type="text" name = "description" class= "form-control">
                        @error('description')
                        <span class = "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for = "image">Picture</label>
                        <!-- <input type="file" name = "file" class= "form-control" onchange = "previewFile(this)"> -->

                        <input type="file"  class = "form-control" name = "picture" onchange="loadFile(event)">
                        <img id="output"  style="max-width:130px;margin-top:20px;"/>
                        <script>
                        // image preview script
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                            }
                        };
                        </script>
                        <!-- <img id = "bookimage" alt="book image"/> -->
                        @error('picture')
                        <span class = "text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                </form>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    </div>
    @include("admin.include.footer")
    </x-app-layout> 