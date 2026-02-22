<div class="modal fade" id="modalVisite{{ $unite->id_unite }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Demande de visite – {{ $unite->type_unite }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="{{ route('visite.store') }}">
        @csrf
        <input type="hidden" name="id_unite" value="{{ $unite->id_unite }}">
        <div class="modal-body">
          <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="telephone" class="form-control">
          </div>
          <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" placeholder="Je souhaite visiter cette unité."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-dark">Envoyer la demande</button>
        </div>
      </form>
    </div>
  </div>
</div>