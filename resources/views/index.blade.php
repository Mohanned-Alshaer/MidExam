@extends('layouts.app')
@section("content")
<style>
    .delete_Edit {
        display: flex;
    }
    .edit {
        margin-right: 20px;
    }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="/add" class="btn btn-outline-secondary">Add New Product</a>
            </div>
    </div>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <table class="table table-bordered">
          <tbody>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th width="280px">Actions</th>
              </tr>
              @foreach ($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->Name}}</td>
                <td>{{$product->Price}} $</td>
                <td>{{$product->Quantity}}</td>
                <td class="delete_Edit">
                    <form action="edit/{{$product->id}}" method="POST">
                        @csrf
                        <!-- @method('edit') -->
                        <button type="submit" class="btn btn-info edit">
                            <i class="fa fa-btn fa-edit"></i>Edit
                        </button>
                    </form>               
                    <form action="destroy/{{$product->id}}" method="POST">
                        @csrf
                        <!-- @method('Delete') -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i>Delete
                        </button>
                    </form>
                </td>
                @endforeach
              </tr>
          </tbody>
        </table>
    </div>
</main>
@endsection