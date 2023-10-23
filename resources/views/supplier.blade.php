<div class="row justify-content-between">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout.app')
    
    @section('content')
    
    <h1 style="text-align: center">Supplier</h1>
    
    <div class="jumbotron">
      <table class="table table-striped">
    <thread>
        <tr>
            <th>Supplier Name</th>
            <th>Contact Info</th>
            <th>Address</th>
        </tr>
    </thread>
    
    <tbody>
        <td>qwerty</td>
        <td>qwerty</td>
        <td>qwerty</td>
    
    
    </tbody>
    
    <tbody>
        <td>qwerty</td>
        <td>qwerty</td>
        <td>qwerty</td>
    
    
    </tbody>
    </div>
    
        <div class="row">
            <form>
    
                <label class="span 2" ><h6>Supplier Name</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 2" ><h6>Contact Info</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 2" ><h6>Address</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <div class="span 1">
                    <select name="type" id="type">
                        <option value="Add" pattern="ADD" >ADD</option>
                        <option value="Remove" pattern="Remove" >REMOVE</option>
                    </select>
                </div>
                <div class="span 2" >
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
            <br>
    </div>
    @endsection
    
    @section('title')
        Supplier
    @endsection