<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus file ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></button>
</form>
