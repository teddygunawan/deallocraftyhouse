<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            @if (empty($category))
            <li class="active">
            @else
            <li>
            @endif
                <a href="/all-products">ALL PRODUCT</a>
            </li>
            @foreach($items as $item)
                @if (!empty($category) AND ($category->parent_id === $item->id OR $category->id === $item->id))
                <li class="active">
                @else
                <li>
                @endif
                    <a href="/category/{{ $item->id }}">{{ $item->name }}</a>
                    <ul>
                        @foreach($item['children'] as $child)
                            @if(!empty($category) AND $category->id === $child->id)
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="/category/{{ $item->id }}/{{ $child->id }}">{{ $child->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>