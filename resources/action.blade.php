<div class="btn-group">
    <form action="{{ $delete }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <a class="btn btn-sm btn-default" href="{{ $show }}" class="text-primary"><i class="far fa-eye"></i></a>
        
        <a class="btn btn-sm btn-primary" href="{{ $edit }}" class="text-primary"><i class="far fa-edit"></i></a>

        <a class="btn btn-sm btn-danger delete-button" href="#"><i class="far fa-trash-alt"></i></a>
    </form>
</div>
                                          