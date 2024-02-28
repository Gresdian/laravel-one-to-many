<div class="modal fade" id="modal_project_delete" tabindex="-1" role="dialog" aria-labelledby="modal_project_delete_label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_project_delete_label">Conferma eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <h3 id="custom-message">Sicuro di voler eliminare questo elemento? {{ $project->name }}</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form id="form_delete" action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                    method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-square btn-danger btn-delete">
                        Cancella
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
