<div class="table-responsive">
    <table class="table" id="petdocs-table">
        <thead class="bg-gradient-primary text-white">
            <tr>
                <th>Pet Id</th>
        <th>File</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($petdocs as $petdoc)
            <tr>
                <td>{!! $petdoc->pet_id !!}</td>
            <td>{!! $petdoc->file !!}</td>
                <td>
                    {!! Form::open(['route' => ['petdocs.destroy', $petdoc->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('petdocs.edit', [$petdoc->id]) !!}" class='btn btn-secondary btn-xs'><i class="fas fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Deseja realmente excluir?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>