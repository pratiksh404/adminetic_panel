<div>
    <div>
        <div class="form-group text-center">
            <!-- Outline Round Floating button -->
            @if (auth()->user()->can('update', $model) &&
    $edit)
                <a href="{{ adminEditRoute(trim($route), $model->id) }}"
                    class="btn btn-warning btn-air-warning btn-sm p-2" title="Edit" data-toggle="tooltip"
                    placement="top"><i class="fa fa-edit"></i></a>
            @endif
            @if (auth()->user()->can('view', $model) &&
    $show)
                <a href="{{ adminShowRoute(trim($route), $model->id) }}" class="btn btn-info btn-air-info btn-sm p-2"
                    data-toggle="tooltip" placement="top" title="Show"><i class="fa fa-eye"></i></a>
            @endif
            @if (auth()->user()->can('delete', $model) &&
    $delete)
                <button type="button" class="btn btn-danger btn-air-danger btn-sm p-2" title="Delete"
                    data-bs-toggle="modal" data-bs-target="#delete-{{ $model->id }}">
                    <i class="fa fa-trash"></i>
                </button>
            @endif
            {{ $buttons ?? '' }}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="delete-{{ $model->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog  flipOutX  animated" role="document">
            <div>
                <button class="btn-close theme-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="card">
                        <div class="animate-widget">
                            @if ($deleteCondition)
                                <div class="card-header bg-danger">
                                    <h4 class="card-title">Item cannot be deleted !</h4>
                                </div>
                                <div class="card-body">
                                    <p>
                                        This item cannot be deleted yet, since it may have dependencies on other
                                        module
                                    </p>
                                </div>
                            @else
                                <div class="card-header bg-danger">
                                    <h4 class="card-title">Delete Item</h4>
                                </div>
                                <form action="{{ adminDeleteRoute(trim($route), $model->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <div class="card-body">
                                        Are you sure you want to delete this data ?
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-air-danger">
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
