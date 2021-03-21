@extends('admin.base-admin')

@section('content')
<div class="card-body">
    <div class="row">
        

        <div class="col-md-6 offset-md-3"> 
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('update_medicine', ['id' => $medicine->id])}}" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" value="{{ $medicine->name }}" class="form-control" id="exampleInputEmail1" name="name"
                placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="text" value="{{ $medicine->company_name }}" class="form-control" id="exampleInputEmail1" name="company_name"
                placeholder="Enter Company Name" required>
            </div>
 
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" value="{{ $medicine->price }}" class="form-control" id="exampleInputPassword1" name="price" placeholder="Enter price" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control"  id="exampleFormControlTextarea1" name="description" rows="3">{{ $medicine->description }}</textarea>
            </div>
            <div class="form-group">
            <img id="image" src="#" />
                <img id="old_image" src="{{URL::to($medicine->image)}}" style="height:60px; width:60px;"/>
                <label for="exampleInputPassword1">Photo</label>
                <input type="file" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function readURL(input)
    {
        if(input.files && input.files[0])
        {
            var reader=new FileReader();
            reader.onload=function(e)
            {
                document.getElementById('image').style.display="block";
                document.getElementById('old_image').style.display="none";
                $('#image')
                .attr('src',e.target.result)
                .width(80)
                .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    document.getElementById('image').style.display="none";
</script>
@endsection