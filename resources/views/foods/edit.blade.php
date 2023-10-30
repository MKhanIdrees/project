<!DOCTYPE html>
<html>
<head>
    <title>Add Cart Item</title>
</head>
<body>
    
<div class="container">
        <h2>Edit Item</h2>
        <form method="POST" action="/foods/{{$item->id}}/update">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foods_name">Item Name:</label>
                <input type="text" class="form-control" id="foods_name" name="foods_name" value="{{ $item->foods_name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
    
</body>
</html>

