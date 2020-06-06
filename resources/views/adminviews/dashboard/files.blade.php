<style>
    .ext-icon {
        color: rgba(0,0,0,0.5);
        margin-left: 10px;
    }
    .installed {
        color: #00a65a;
        margin-right: 10px;
    }
</style>



<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $project->name || ''}}</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">



            @foreach($fileObject as $file)

                @if ($file->type == 1)
                <ul class="products-list product-list-in-box">
                    <li class="item">
                        <div class="product-img">
                            {{ $file->name }}
                        </div>
                        <div class="product-info">
                            {{ $file->description }}
                        </div>
                        <div class="product-info">
                            <audio src="/uploads/{{ $file->path }}" controls>
                                <p>Tu navegador no implementa el elemento audio</p>
                            </audio>

                        </div>
                    </li>
                </ul>
                @endif

                    @if ($file->type == 2)
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-img">
                                    {{ $file->name }}
                                </div>
                                <div class="product-info">
                                    {{ $file->description }}
                                </div>
                                <div class="product-info">
                                    <a href="/uploads/{{ $file->path }}" target="_blank">
                                    <img width="50%" src="/uploads/{{ $file->path }}" />
                                    </a>

                                </div>
                            </li>
                        </ul>
                    @endif

                    @if ($file->type == 3)
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-img">
                                    {{ $file->name }}
                                </div>
                                <div class="product-info">
                                    {{ $file->description }}
                                </div>
                                <div class="product-info">
                                    <video src="/uploads/{{ $file->path }}" controls>
                                        <p>Tu navegador no implementa el elemento video</p>
                                    </video>

                                </div>
                            </li>
                        </ul>
                @endif
                    @if ($file->type == 4)
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class=" product-img">
                                    <span class="uppercase"> {{ $file->name }} </span>
                                </div>
                                <div class="product-info">
                                    {{ $file->description }}
                                </div>
                                <div class="product-info">
                                    <a class="btn btn-success" href="/uploads/{{ $file->path }}" target="_blank">
                                         ver PDF
                                    </a>

                                </div>
                            </li>
                        </ul>
                @endif

            @endforeach



            <!-- /.item -->
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="/admin" class="uppercase">REGRESAR</a>
    </div>
    <!-- /.box-footer -->
</div>
