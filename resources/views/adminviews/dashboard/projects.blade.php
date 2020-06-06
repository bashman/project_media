<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Proyectos</h3>

    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped">

                @foreach($projectObject as $env)
                <tr>
                    <td id="{{ $env['id'] }}" width="100%"><a href="/admin/project-files/{{ $env['id'] }}">{{ $env['name'] }}</a></td>

                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>
