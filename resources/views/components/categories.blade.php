<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCategories" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header text-bg-primary">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Categorías</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <p class="text-muted">Selecciona las categorías que deseas ver</p>

        <div class="my-auto">
            @foreach ($categories as $category)
            <div class="form-check mb-2">
                <input
                    class="form-check-input category-filter"
                    type="checkbox"
                    value="{{ $category['category_id'] }}"
                    id="category_{{ $category['category_id'] }}">
                <label class="form-check-label h5" for="category_{{ $category['category_id'] }}">
                    {{ $category['category_name'] }}
                    <span class="text-muted small">({{ $category['company_count'] }})</span>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>