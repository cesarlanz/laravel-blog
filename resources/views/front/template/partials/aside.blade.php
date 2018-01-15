<div class="sidebar-module sidebar-module-inset">
  <h4>About</h4>
  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>
<div class="sidebar-module">
  <h4>Categorías</h4>
  <ul class="list-group">
    @foreach($categories as $category)
      <li class="list-group-item">
        <span class="badge">{{ $category->articles->count() }}</span>
        <a href="{{ route('front.search.category', $category->name) }}">
          {{ $category->name }}
        </a>
      </li>
    @endforeach
  </ul>
</div>
<div class="sidebar-module">
  <h4>Tags</h4>
  @foreach($tags as $tag)
    <span class="label label-info">
      {{ $tag->name }}
    </span>
  @endforeach
</div>